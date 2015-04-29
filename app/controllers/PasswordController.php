<?php

class PasswordController extends Controller {


	public function getChangePassword()
	{
	  return View::make('password/reset');
	}

	public function postChangePassword()
	{
		$rules = array(
            'last_password'     => 'required',
            'new_password'      => 'required',
            'password_confirmation'   => 'required|same:new_password',
        );
 
        $attributes = array(
            'last_password'     => 'last_password',
            'new_password'      => 'new_password',
            'password_confirmation'   => 'password_confirmation',
        );

		$validator = Validator::make(Input::all(),$rules,array(),$attributes);
		if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }else{
            //check last password is true
            $userName = Auth::user()->username;
 
            $userdata = array(
                'username' => $userName,
                'password' => Input::get('last_password')
            );
 
            if(Auth::validate($userdata)){
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make(Input::get('new_password'));
                $user->save();
 
                Auth::logout();
                return Redirect::to('/')->with('success', 'Ubah password berhasil. Silahkan login kembali menggunakan password baru');
 
            }else{
                return Redirect::back()->with('error', 'salah memasukkan password lama')->withInput();
            }
        }
    }


}
