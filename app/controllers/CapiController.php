<?php

class CapiController extends Controller {


	public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function showCapiSE($nks,$page){
    	if($page==1){
    		$data= B1::find($nks);  		
    		return View::make('capi/capi-se-1')->with('data',$data);
    	}else if($page==2){	
	    	$data = B2::find($nks);
	    	return View::make('capi/capi-se-2')->with('data',$data);  
    	}
    	else if($page==3){	
	    	$data = B3::find($nks);
	    	return View::make('capi/capi-se-3')->with('data',$data);  
    	}
    	else if($page==4){	
	    	$data = B4::where('nks_b1','=',$nks)->paginate(10);
	    	return View::make('capi/capi-se-listkapal')->with('data',$data);  
    	}
    	else if($page==5){	
	    	$data = B4::find($nks);
	    	return View::make('capi/capi-se-4')->with('data',$data);  
    	}
    	else if($page==6){	
	    	$data = B4::find($nks);
	    	return View::make('capi/capi-se-5')->with('data',$data);  
    	}
        else if($page==7){  
            $data = B4::find($nks);
            return View::make('capi/capi-se-6')->with('data',$data);  
        }

        else if($page==8){  
            $data = B4::find($nks);
            return View::make('capi/capi-se-7')->with('data',$data);  
        }
        else if($page==9){  
            $data = B5::find($nks);
            return View::make('capi/capi-se-8')->with('data',$data);  
        }
        else if($page==10){  
            $data = B5::find($nks);
            return View::make('capi/capi-se-9')->with('data',$data);  
        }
        else if($page==11){  
            $data = B6::find($nks);
            return View::make('capi/capi-se-10')->with('data',$data);  
        }
    }

    public function showListCapiSE(){
        if(Input::get('NIM')!=null){
            $q = Input::get('NIM');
            $data = B2::where('b2r2s1','=',$q)->paginate(100);
            return View::make('capi/capi-se')->with('data',$data);
        }
        else{    
            if(Auth::user()->id_jabatan==3){
                $kortim = Kortim::where('user_id','=',Auth::user()->id)->first();
                $data = B2::where('b2r2s2','=',$kortim['nimkortim'])->orderBy('b2r3s1', 'DESC')->paginate(12);
                return View::make('capi/capi-se')->with('data',$data);
            }else{
            	$data = B2::orderBy('b2r3s1', 'DESC')->paginate(12);
            	return View::make('capi/capi-se')->with('data',$data);
            }
        }
    }

	    public function showCapiSK($nks,$page){
        if($page==1){
            $data['B1'] = CapiSKB1::find($nks);         
                $data['B2'] = CapiSKB2::find($nks);
                $kortim = Kortim::where('user_id','=',Auth::user()->id)->first();
                
                //if( $data['B2']->b2r1s2 == null ) $data['B2']->b2r1s2 = $user->pcl;
                
            return View::make('capi/capi-sk-1')->with('data',$data);
        }else if($page==2){
            $data = CapiSKB3::find($nks);
            return View::make('capi/capi-sk-2')->with('data',$data);  
        }
        else if($page==3){  
            $data = CapiSKB4::find($nks);
            return View::make('capi/capi-sk-3')->with('data',$data);  
        }
        else if($page==4){  
            $data = CapiSKB4::find($nks);
            return View::make('capi/capi-sk-4')->with('data',$data);  
        }
        else if($page==5){  
            $data = CapiSKB4::find($nks);
            return View::make('capi/capi-sk-5')->with('data',$data);  
        }
        else if($page==6){  
            $data = CapiSKB4::find($nks);
            return View::make('capi/capi-sk-6')->with('data',$data);  
        }
        else if($page==7){  
            $data = CapiSKB5::find($nks);
            return View::make('capi/capi-sk-7')->with('data',$data);  
        }
    }
    
    public function showListCapiSK(){
        if(Input::get('nks')!=null){
            $nks = Input::get('nks');
            /*$nimnya = substr($nim,0,2).substr($nim, 3);*/
            $data = CapiSKB2::where('nksb2','=',$nks)->paginate(80);
            return View::make('capi/capi-sk')->with('data',$data);
        }else{
            if( Auth::user()->id_jabatan == 3 ){
                $kortim = Kortim::where('user_id','=',Auth::user()->id)->first();
                $nimkortim = substr($kortim['nimkortim'],0,2).substr($kortim['nimkortim'], 3);
                $data = CapiSKB2::where('b2r2s2','=',$nimkortim)->paginate(80);
                return View::make('capi/capi-sk')->with('data',$data);
            }else{
                $data = CapiSKB2::paginate(80);
                return View::make('capi/capi-sk')->with('data',$data);
            }
        }
    }
    
    public function submitCapiSK(){
        if( Auth::user()->id_jabatan == 3 ){
            $nks = Input::get('nks');
            $cek = CapiSKB2::find($nks);
            
            if( $cek['b2r3s2d1'] == '' ) CapiSKB2::where('nksb2','=',$nks)->update(array(
                'b2r3s2d1' => $cek['b2r3s1d1'],
                'b2r3s2d2' => $cek['b2r3s1d2']
            ));
            
            CapiSKB3::where('nksb3','=',$nks)->update(array(
                'b3r4s1d2'    =>  Input::get('prov1'),
                'b3r4s2d2' =>  Input::get('kab1'),
                'b3r5s1d2'  => Input::get('prov2'),
                'b3r5s2d2' => Input::get('kab2'),
                'b3r11s2' => Input::get('lapusaha')
            ));
            
            CapiSKB5::where('nksb5','=',$nks)->update(array(
                'catatan' => Input::get('catatan')
            ));

            //$data->save();
            return Redirect::to('capi-sk')->with('success','Isian berhasil dilengkapi');
        }else{
            return Redirect::to('capi-sk')->with('failed','Maaf anda tidak berhak merubah isian ini');
        }
    }


}