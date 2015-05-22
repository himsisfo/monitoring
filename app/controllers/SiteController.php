<?php

class SiteController extends Controller {

	public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

	public function welcome(){
        //batas waktu listing sebagai penentu display
        $batas = strtotime('2015-03-15 00:00:00');
        $res = time() - $batas;
        if( $res < 0 ) {
                $title = "listing";
                $petaid = "jabar_listing";
                $data['cirebon_listing'] = Nbsse::where('kota','=','09')->sum('progressListing');
                $data['sukabumi_listing'] = Nbsse::where('kota','=','02')->sum('progressListing');
                $data['indramayu_listing'] = Nbssk::where('kota','=','12')->sum('progressListing');
                $data['bandung_listing'] = Nbssk::where('kota','=','73')->sum('progressListing');

                $data['cirebon_bebanListing'] = Nbsse::where('kota','=','09')->sum('bebanListing');
                $data['sukabumi_bebanListing'] = Nbsse::where('kota','=','02')->sum('bebanListing');
                $data['indramayu_bebanListing'] = Nbssk::where('kota','=','12')->sum('bebanListing');
                $data['bandung_bebanListing'] = Nbssk::where('kota','=','73')->sum('bebanListing');
                
                $cir1 = $data['cirebon_listing']/$data['cirebon_bebanListing']*100;
                $cir2 = 100 - $cir1;
                
                $suk1 = $data['sukabumi_listing']/$data['sukabumi_bebanListing']*100;
                $suk2 = 100 - $suk1;
                
                $ind1 = $data['indramayu_listing']/$data['indramayu_bebanListing']*100;
                $ind2 = 100 - $ind1;
                
                $ban1 = $data['bandung_listing']/$data['bandung_bebanListing']*100;
                $ban2 = 100 - $ban1;
        }
        else{
            $title = "cacah";
            $petaid = "jabar_cacah";
            
            $data['cirebon_cacah'] = Nbsse::where('kota','=','09')->sum('cacah');
            $data['sukabumi_cacah'] = Nbsse::where('kota','=','02')->sum('cacah');
            $data['indramayu_cacah'] = Nbssk::where('kota','=','12')->sum('cacah');
            $data['bandung_cacah'] = Nbssk::where('kota','=','73')->sum('cacah');

            $data['cirebon_bebanCacah'] = Nbsse::where('kota','=','09')->sum('maxcacah');
            $data['sukabumi_bebanCacah'] = Nbsse::where('kota','=','02')->sum('maxcacah');
            $data['indramayu_bebanCacah'] = Nbssk::where('kota','=','12')->sum('maxcacah');
            $data['bandung_bebanCacah'] = Nbssk::where('kota','=','73')->sum('maxcacah');
            
            $cir1 = $data['cirebon_cacah']/$data['cirebon_bebanCacah']*100;
            $cir2 = 100 - $cir1;

            $suk1 = $data['sukabumi_cacah']/$data['sukabumi_bebanCacah']*100;
            $suk2 = 100 - $suk1;

            $ind1 = $data['indramayu_cacah']/$data['indramayu_bebanCacah']*100;
            $ind2 = 100 - $ind1;

            $ban1 = $data['bandung_cacah']/$data['bandung_bebanCacah']*100;
            $ban2 = 100 - $ban1;
           
        }

        $data = array(
            'cir1'  => $cir1,
            'cir2'  => $cir2,
            'suk1'  => $suk1,
            'suk2'  => $suk2,
            'ind1'  => $ind1,
            'ind2'  => $ind2,
            'ban1'  => $ban1,
            'ban2'  => $ban2,
            'title' => $title,
            'petaid' => $petaid,
        );

		return View::make('monitoring/index')->with('data',$data);
	}


    public function showRegister(){
        return View::make('monitoring/register');        
    }

    public function postRegister()
    {
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'idpkl' => Input::get('idpkl'),
            'password' => Input::get('password'),
            'jabatan' => Input::get('jabatan'),
            'bidang' => Input::get('bidang'),
            'password_confirmation' => Input::get('password_confirmation')
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required|min:2|unique:users',
            'email' => 'Required|email|unique:users',
            'idpkl' => 'Required',
            'password'  => 'Required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'Required|alpha_num|between:6,12'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->id_bidang = Input::get('bidang');
            $user->id_jabatan = Input::get('jabatan');
                       

            $user->save();

            if(Input::get('jabatan')==1){
                $dosen = new Dosen;
                $dosen->user_id=$user->id;
                $dosen->nama=Input::get('username');
                $dosen->iddosen=Input::get('idpkl');
                $dosen->save();
            }
            else if(Input::get('jabatan')==2){
                $korwil = new Korwil;
                $korwil->user_id=$user->id;
                //$korwil->nama=Input::get('username');
                $korwil->nokorwil=Input::get('idpkl');
                $korwil->save();
            }
            else if(Input::get('jabatan')==3){
                $kortim = new Kortim;
                $kortim->user_id=$user->id;
                $kortim->nama=Input::get('username');
                $kortim->nokortim=Input::get('idpkl');
                $kortim->save();
            }
            else if(Input::get('jabatan')==4){
                $pcl = new Pcl;
                $pcl->user_id=$user->id;
                $pcl->nama=Input::get('username');
                $pcl->id=Input::get('idpkl');
                $pcl->save();
            }
            else if(Input::get('jabatan')==5){

            }

            Mail::send('mail/welcome', array('username'=>Input::get('username'),'password'=>Input::get('password')), function($message){
                $message->to(Input::get('email'),Input::get('username'))->subject('Welcome to WEB Monitoring PKL54!');
            });

            return Redirect::to('login')->with('success','Thanks for registering!');
        }

        // Something went wrong.
        return Redirect::to('register')->withErrors($validator)->withInput(Input::except('password'));
    }



	public function showLogin()
    {
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('');
        }

        // Show the login page
        return View::make('monitoring/login');
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

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            // Try to log the user in.
            if (Auth::attempt($userdata))
            {
                 if(Auth::user()->isAdmin()){
                    return Redirect::to('admin/');
                }
                else{
                    // Redirect to homepage
                    return Redirect::to('')->with('success', 'You have logged in successfully');
                }
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

    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('')->with('success', 'You are logged out');
    }


    public function showKorlap()
    {
        if(Input::get('name')!==null){
            $q = Input::get('name');
            $data['count'] = count(Korlap::where('namakorlap','like','%'.$q.'%')->get());
            $data['kor'] = Korlap::where('namakorlap','like','%'.$q.'%')->paginate(12);
            $data['title']='Korlap';
            return View::make('monitoring/korsearch')->with('data',$data);
        }
        else{
            $data['kor'] = Korlap::paginate(12);
            $data['title']='Koordinator Lapangan';
            return View::make('monitoring/kor')->with('data',$data);
        }
        
    }

    public function showKorwil()
    {
        if(Input::get('name')!==null){
            $q = Input::get('name');
            $data['count'] = count(Korwil::where('namakorwil','like','%'.$q.'%')->get());
            $data['kor'] = Korwil::where('namakorwil','like','%'.$q.'%')->paginate(12);
            $data['title']='Korwil';
            return View::make('monitoring/korsearch')->with('data',$data);
        }
        else{
            $data['kor'] = Korwil::paginate(12);
            $data['title']='Koordinator Wilayah';
            return View::make('monitoring/kor')->with('data',$data);
        }
        
    }

    public function showKortim(){

        if(Input::get('name')!==null){
            $q = Input::get('name');
            $data['count'] = count(Kortim::where('namakortim','like','%'.$q.'%')->get());
            $data['kor'] = Kortim::where('namakortim','like','%'.$q.'%')->paginate(12);
            $data['title']='Kortim';
            return View::make('monitoring/korsearch')->with('data',$data);
        }
        else{
            $data['kor'] = Kortim::paginate(12);
            $data['title']='Koordinator Tim';
            
            return View::make('monitoring/kor')->with('data',$data);
        }
    }

    public function showDosen(){
        if(Input::get('name')!==null){
            $q = Input::get('name');
            $data['count'] = count(Dosen::where('namadosen','like','%'.$q.'%')->get());
            $data['kor'] = Dosen::where('namadosen','like','%'.$q.'%')->paginate(12);
            $data['title']='Dosen';
            return View::make('monitoring/korsearch')->with('data',$data);
        }
        else{
            $data['kor'] = Dosen::paginate(12);
            $data['title']='Tim Dosen';
            
            return View::make('monitoring/kor')->with('data',$data);
        }
    }
    public function showMyProfile(){
        return Redirect::to('profile='.Auth::user()->id);
    }

    public function showProfile($id){

        $data['user']=User::find($id);
        
        if($data['user']->id_jabatan==1){
            
            $data['pos']=User::find($id)->dosen()->first();
            $data['jabatan']=$data['pos']['jabatan'];
            $data['id']=$data['pos']['iddosen'];
            $data['areakerjadosen'] = Areakerjadosen::where('iddosen','=',$data['pos']['iddosen'])->get();
        }
        else if($data['user']->id_jabatan==2){
            $data['jabatan']='Koordinator wilayah';
            $data['pos']=User::find($id)->korwil()->first();
            $data['id']=$data['pos']->nokorwil;
            $data['areakerja'] = Kortim::where('nokorwil','=',$data['pos']->nokorwil)->get();

        }
        else if($data['user']->id_jabatan==3){
            $data['jabatan']='Koordinator tim';
            $data['pos']=User::find($id)->kortim()->first();
            $data['id']=$data['pos']->nokortim;
            $data['areakerja'] = Pcl::where('KODEKORTIM','=',$data['pos']->nokortim)->get();
        }else if($data['user']->id_jabatan==4){
            $data['jabatan']='Pencacah Lapangan';
            $data['pos']=User::find($id)->pcl()->first();
            $data['id']=$data['pos']->id;
        }else if($data['user']->id_jabatan==5){
            $data['jabatan']='Koordinator Lapangan';
            $data['pos']=User::find($id)->korlap()->first();
            $data['id']=$data['pos']->id;
        }

        return View::make('users/profile')->with('data',$data);        
    }

    

    public function updateProfile(){

         // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            //'namabaru' => Input::get('namabaru'),
            'avatar' => Input::file('avatar'),
            'description' => Input::get('description'),
            'alamat' => Input::get('alamat'),
            'daerah' => Input::get('daerah'),
            'kerabat' => Input::get('kerabat'),
            'twitter' => Input::get('twitter')
        );

        // Declare the rules for the form validation.
        $rules = array(
            //'email' => 'Required|email',
            //'namabaru' => 'Required|between:3,200',
            'avatar' => 'image|max:3000',
            'kerabat' => 'digits_between:12,13',
            'Asal Daerah'  => 'alpha'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        if ($validator->passes()){
            $user = Auth::user();
            if(Input::file('avatar')!=null){
                $destinationPath = 'assets/image/';
                $file = Input::file('avatar');
                $extension = Input::file('avatar')->getClientOriginalExtension();
                $filename = sha1(time().time()).".{$extension}";

                $upload_success = Input::file('avatar')->move($destinationPath, $filename);
                if($upload_success){
                    File::delete($user->image);
                    $user->image = $destinationPath.'/'.$filename;
                }
            }
            
            if(Input::get('description')!=null)
            $user->description = Input::get('description');
            if(Input::get('alamat')!=null)
            $user->alamat = Input::get('alamat');
            if(Input::get('daerah')!=null)
            $user->daerah=Input::get('daerah');
            if(Input::get('kerabat')!=null)
            $user->kerabat=Input::get('kerabat');
            if(Input::get('twitter')!=null)
            $user->twitter=Input::get('twitter');
            $user->save();
            return Redirect::to('profile='.Auth::user()->id)->with('success','Profile anda telah berhasil diupdate!');            
        }

        return Redirect::to('profile='.Auth::user()->id)->with('failed','Terjadi Kesalahan, Profile anda tidak berhasil diupdate!');
    }

public function indexTabulasi(){
             
        $datacirebon = B1::where('b1r2','=','09')->get();
        $datasukabumi = B1::where('b1r2','=','02')->get();
     
        $data['tabel211']=0;
        $data['tabel221']=0;
        $data['tabel231']=0;
        $data['tabel241']=0;
        $data['tabel251']=0;
        $data['tabel261']=0;
        $data['tabel271']=0;
        $data['tabel281']=0;
        $data['tabel291']=0;
        $data['tabel2101']=0;
        
        $data['tabel212']=0;
        $data['tabel222']=0;
        $data['tabel232']=0;
        $data['tabel242']=0;
        $data['tabel252']=0;
        $data['tabel262']=0;
        $data['tabel272']=0;
        $data['tabel282']=0;
        $data['tabel292']=0;
        $data['tabel2102']=0;
        $data['tabel1lakicirebon']=0;
        $data['tabel1lakisukabumi']=0;        

        $data['tabel1perempuancirebon']=0;
        $data['tabel1perempuansukabumi']=0;

        $data['tabel31']=0;
        $data['tabel32']=0;
        $data['tabel33']=0;
        $data['tabel34']=0;
        $data['tabel35']=0;
        $data['tabel36']=0;
        $data['tabel37']=0;
        $data['tabel38']=0;
        $data['tabel39']=0;
        $data['tabel310']=0;
        $data['tabel311']=0;
        $data['tabel312']=0;
        $data['tabel313']=0;
        $data['tabel314']=0;
        $data['tabel315']=0;
        $data['tabel316']=0;
        $data['tabel30a']=0;
        $data['tabel30b']=0;
        foreach($datacirebon as $row){
            $data['tabel30a']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar3','=',1)->count();
            $data['tabel31']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',1)->count();
            $data['tabel33']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',2)->count();
            $data['tabel35']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',3)->count();
            $data['tabel37']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',4)->count();
            $data['tabel39']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',5)->count();
            $data['tabel311']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',6)->count();
            $data['tabel313']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',7)->count();
            $data['tabel313']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',8)->count();
            

            $data['tabel1lakicirebon']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar2','=',1)->count();       

            $data['tabel1perempuancirebon']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar2','=',2)->count();

            $data['tabel211'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',19)->where('b3ar1','>=',15)->count();
            $data['tabel221'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',24)->where('b3ar1','>=',20)->count();
            $data['tabel231'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',29)->where('b3ar1','>=',25)->count();
            $data['tabel241'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',34)->where('b3ar1','>=',30)->count();
            $data['tabel251'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',39)->where('b3ar1','>=',35)->count();
            $data['tabel261'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',44)->where('b3ar1','>=',40)->count();
            $data['tabel271'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',49)->where('b3ar1','>=',45)->count();
            $data['tabel281'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',54)->where('b3ar1','>=',50)->count();
            $data['tabel291'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',59)->where('b3ar1','>=',55)->count();
            $data['tabel2101'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',100)->where('b3ar1','>=',60)->count();
        }

        foreach($datasukabumi as $row){
            
            $data['tabel30b']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar3','=',1)->count();            
            $data['tabel32']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',1)->count();
            $data['tabel34']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',2)->count();
            $data['tabel36']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',3)->count();
            $data['tabel38']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',4)->count();
            $data['tabel310']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',5)->count();
            $data['tabel312']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',6)->count();
            $data['tabel314']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',7)->count();
            $data['tabel314']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar6','=',8)->count();


            $data['tabel1lakisukabumi']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar2','=',1)->count();    
            $data['tabel1perempuansukabumi']+=B3::where('nks_b1','=',$row['nks'])->where('b3ar2','=',2)->count();
            $data['tabel212'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',19)->where('b3ar1','>=',15)->count();
            $data['tabel222'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',24)->where('b3ar1','>=',20)->count();
            $data['tabel232'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',29)->where('b3ar1','>=',25)->count();
            $data['tabel242'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',34)->where('b3ar1','>=',30)->count();
            $data['tabel252'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',39)->where('b3ar1','>=',35)->count();
            $data['tabel262'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',44)->where('b3ar1','>=',40)->count();
            $data['tabel272'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',49)->where('b3ar1','>=',45)->count();
            $data['tabel282'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',54)->where('b3ar1','>=',50)->count();
            $data['tabel292'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',59)->where('b3ar1','>=',55)->count();
            $data['tabel2102'] += B3::where('nks_b1','=',$row['nks'])->where('b3ar1','<=',100)->where('b3ar1','>=',60)->count();
        }


        return View::make('tabulasi/index')->with('data',$data);  
    }

    public function tabulasiSK(){
        $data['bandung'] = CapiSKB1::where('b1r1','=','73')->get();
        $data['indramayu'] = CapiSKB1::where('b1r1','=','12')->get();
        
        //$data['bandung']['L'] = CapiSKB1::where('b1r1','=','73')->with('capiskb3')->get();
        
        // JENIS KELAMIN
        $data['1']['L'] = 0;
        $data['1']['P'] = 0;
        foreach($data['bandung'] as $row){
            $data['1']['L'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r2','=','1')->count();
            $data['1']['P'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r2','=','2')->count();
        }
        $data['1']['jeniskelamin'] = ($data['1']['L'])+($data['1']['P']);
        
        $data['2']['L'] = 0;
        $data['2']['P'] = 0;
        
        foreach($data['indramayu'] as $row){
            $data['2']['L'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r2','=','1')->count();
            $data['2']['P'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r2','=','2')->count();
        }
        $data['2']['jeniskelamin'] = ($data['2']['L'])+($data['2']['P']);;
        
        // KELOMPOK UMUR
        $data['1']['1'] = 0;
        $data['1']['2'] = 0;
        $data['1']['3'] = 0;
        foreach($data['bandung'] as $row){
            $data['1']['1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',15)->where('b3r3','<=',24)->count();
            $data['1']['2'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',25)->where('b3r3','<=',44)->count();
            $data['1']['3'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',45)->where('b3r3','<=',64)->count();
        }
        $data['1']['kelompokumur'] = ($data['1']['1'])+($data['1']['2'])+($data['1']['3']);
        
        $data['2']['1'] = 0;
        $data['2']['2'] = 0;
        $data['2']['3'] = 0;
        foreach($data['indramayu'] as $row){
            $data['2']['1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',15)->where('b3r3','<=',24)->count();
            $data['2']['2'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',25)->where('b3r3','<=',44)->count();
            $data['2']['3'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r3','>=',45)->where('b3r3','<=',64)->count();
        }
        $data['2']['kelompokumur'] = ($data['2']['1'])+($data['2']['2'])+($data['2']['3']);
        
        // STATUS PERKAWINAN
        $data['1']['belumkawin'] = 0;
        $data['1']['kawin'] = 0;
        $data['1']['ceraihidup'] = 0;
        $data['1']['ceraimati'] = 0;
        foreach($data['bandung'] as $row){
            $data['1']['belumkawin'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',1)->count();
            $data['1']['kawin'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',2)->count();
            $data['1']['ceraihidup'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',3)->count();
            $data['1']['ceraimati'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',4)->count();
        }
        $data['1']['statusperkawinan'] = ( $data['1']['belumkawin']+$data['1']['kawin']+ $data['1']['ceraihidup'] + $data['1']['ceraimati']);
        
        $data['2']['belumkawin'] = 0;
        $data['2']['kawin'] = 0;
        $data['2']['ceraihidup'] = 0;
        $data['2']['ceraimati'] = 0;
        foreach($data['indramayu'] as $row){
            $data['2']['belumkawin'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',1)->count();
            $data['2']['kawin'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',2)->count();
            $data['2']['ceraihidup'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',3)->count();
            $data['2']['ceraimati'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r6','=',4)->count();
        }
        $data['2']['statusperkawinan'] = ( $data['2']['belumkawin']+$data['2']['kawin']+ $data['2']['ceraihidup'] + $data['2']['ceraimati']);
        
        //PENDIDIKAN TERAKHIR
        $data['1']['tidaksekolah'] = 0;
        $data['1']['belumtamatSD'] = 0;
        $data['1']['SD'] = 0;
        $data['1']['SMP'] = 0;
        $data['1']['SMA'] = 0;
        $data['1']['SMK'] = 0;
        $data['1']['D1'] = 0;
        $data['1']['D3'] = 0;
        $data['1']['S1'] = 0;
        $data['1']['S2'] = 0;
        foreach($data['bandung'] as $row){
            $data['1']['tidaksekolah'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',0)->count();
            $data['1']['belumtamatSD'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',1)->count();
            $data['1']['SD'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',2)->count();
            $data['1']['SMP'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',3)->count();
            $data['1']['SMA'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',4)->count();
            $data['1']['SMK'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',5)->count();
            $data['1']['D1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',6)->count();
            $data['1']['D3'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',7)->count();
            $data['1']['S1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',8)->count();
            $data['1']['S2'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',9)->count();
        }
        $data['1']['pendidikan'] = ( $data['1']['tidaksekolah'] + $data['1']['belumtamatSD'] + $data['1']['SD'] + 
                                     $data['1']['SMP'] + $data['1']['SMA'] + $data['1']['SMK'] + $data['1']['D1'] +
                                     $data['1']['D3'] + $data['1']['S1'] + $data['1']['S2'] );
        
        $data['2']['tidaksekolah'] = 0;
        $data['2']['belumtamatSD'] = 0;
        $data['2']['SD'] = 0;
        $data['2']['SMP'] = 0;
        $data['2']['SMA'] = 0;
        $data['2']['SMK'] = 0;
        $data['2']['D1'] = 0;
        $data['2']['D3'] = 0;
        $data['2']['S1'] = 0;
        $data['2']['S2'] = 0;
        foreach($data['indramayu'] as $row){
            $data['2']['tidaksekolah'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',0)->count();
            $data['2']['belumtamatSD'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',1)->count();
            $data['2']['SD'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',2)->count();
            $data['2']['SMP'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',3)->count();
            $data['2']['SMA'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',4)->count();
            $data['2']['SMK'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',5)->count();
            $data['2']['D1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',6)->count();
            $data['2']['D3'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',7)->count();
            $data['2']['S1'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',8)->count();
            $data['2']['S2'] += CapiSKB3::where('nksb3','=',$row['nks'])->where('b3r7','=',9)->count();
        }
        
        $data['2']['pendidikan'] = ( $data['2']['tidaksekolah'] + $data['2']['belumtamatSD'] + $data['2']['SD'] + 
                                     $data['2']['SMP'] + $data['2']['SMA'] + $data['2']['SMK'] + $data['2']['D1'] +
                                     $data['2']['D3'] + $data['2']['S1'] + $data['2']['S2'] );
        //$data['laki'] = CapiSKB3::with('capiskb1',$data['bandung']->nks)->get();
        
        return View::make('tabulasi/tabulasi_SK')->with('data',$data);        
    }
    
    
    public function showProblems(){
        $data = Problem::orderBy('tanggal', 'DESC')->paginate(15);
        return View::make('monitoring/problems')->with('data',$data);
    }
}