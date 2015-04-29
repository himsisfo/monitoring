<?php

class ProgressController extends Controller {


    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
    public function getProgress(){
        $data['cirebon_listing'] = Nbsse::where('kota','=','09')->sum('progressListing');
        $data['sukabumi_listing'] = Nbsse::where('kota','=','02')->sum('progressListing');
        $data['indramayu_listing'] = Nbssk::where('kota','=','12')->sum('progressListing');
        $data['bandung_listing'] = Nbssk::where('kota','=','73')->sum('progressListing');
        
        $data['cirebon_bebanListing'] = Nbsse::where('kota','=','09')->sum('bebanListing');
        $data['sukabumi_bebanListing'] = Nbsse::where('kota','=','02')->sum('bebanListing');
        $data['indramayu_bebanListing'] = Nbssk::where('kota','=','12')->sum('bebanListing');
        $data['bandung_bebanListing'] = Nbssk::where('kota','=','73')->sum('bebanListing');
        
        $data['cirebon_cacah'] = Nbsse::where('kota','=','09')->sum('cacah');
        $data['sukabumi_cacah'] = Nbsse::where('kota','=','02')->sum('cacah');
        $data['indramayu_cacah'] = Nbssk::where('kota','=','12')->sum('cacah');
        $data['bandung_cacah'] = Nbssk::where('kota','=','73')->sum('cacah');
        
        $data['cirebon_bebanCacah'] = Nbsse::where('kota','=','09')->sum('maxcacah');
        $data['sukabumi_bebanCacah'] = Nbsse::where('kota','=','02')->sum('maxcacah');
        $data['indramayu_bebanCacah'] = Nbssk::where('kota','=','12')->sum('maxcacah');
        $data['bandung_bebanCacah'] = Nbssk::where('kota','=','73')->sum('maxcacah');
        
        //for($i=0; $i<7; $i++){
            $data['cirebon_daily'][0] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-14')->count();
            $data['sukabumi_daily'][0] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-14')->count();
            $data['indramayu_daily'][0] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-14')->count();
            $data['bandung_daily'][0] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-14')->count();
            
            $data['cirebon_daily'][1] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-15')->count();
            $data['sukabumi_daily'][1] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-15')->count();
            $data['indramayu_daily'][1] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-15')->count();
            $data['bandung_daily'][1] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-15')->count();
            
            $data['cirebon_daily'][2] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-16')->count();
            $data['sukabumi_daily'][2] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-16')->count();
            $data['indramayu_daily'][2] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-16')->count();
            $data['bandung_daily'][2] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-16')->count();
            
            $data['cirebon_daily'][3] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-17')->count();
            $data['sukabumi_daily'][3] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-17')->count();
            $data['indramayu_daily'][3] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-17')->count();
            $data['bandung_daily'][3] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-17')->count();
            
            $data['cirebon_daily'][4] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-18')->count();
            $data['sukabumi_daily'][4] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-18')->count();
            $data['indramayu_daily'][4] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-18')->count();
            $data['bandung_daily'][4] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-18')->count();
            
            $data['cirebon_daily'][5] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-19')->count();
            $data['sukabumi_daily'][5] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-19')->count();
            $data['indramayu_daily'][5] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-19')->count();
            $data['bandung_daily'][5] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-19')->count();
            
            $data['cirebon_daily'][6] = Progrec::where('kota','=','09')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-20')->count();
            $data['sukabumi_daily'][6] = Progrec::where('kota','=','02')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-20')->count();
            $data['indramayu_daily'][6] = Progrec::where('kota','=','12')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-20')->count();
            $data['bandung_daily'][6] = Progrec::where('kota','=','73')->where('kegiatan','=','CLEANING')->where('tanggal','=','2015-03-20')->count();
        //}
        
        return Response::json($data);
    }

    public function showListing(){
        $data = Kecamatan::get();
    	return View::make('progress/listing')->with('data',$data);  
    }

    public function showPencacahan(){
        $data = Kecamatan::get();
    	return View::make('progress/pencacahan')->with('data',$data);  
    }

}
