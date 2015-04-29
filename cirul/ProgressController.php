<?php

class ProgressController extends Controller {


    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
    public function getProgress(){
        $data['cirebon'] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','71')->get());
        $data['sukabumi'] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','05')->get());
        $data['indramayu'] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','10')->get());
        
        $data[0] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','10')->where('tanggal','=','2014-04-25')->get());
        $data[1] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','10')->where('tanggal','=','2014-04-26')->get());
        $data[2] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','10')->where('tanggal','=','2014-04-27')->get());
        $data[3] = count(Progrec::where('kegiatan','=','CLEANING USAHA')->where('kota','=','10')->where('tanggal','=','2014-04-28')->get());
        return Response::json($data);
    }

    public function showListing(){
    	return View::make('progress/listing');
    }

    public function showPencacahan(){
    	return View::make('progress/pencacahan');
    }

}
