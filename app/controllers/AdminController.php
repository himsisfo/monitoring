<?php

class AdminController extends Controller {

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function showDashboard(){
        return View::make('admin/index');
    }

    public function getCalendar(){

    }

    public function getUser(){
        return View::make('admin/user')->with('data');
    }

    public function getDatatable()
    {
    	$user= DB::table('kortim')
    	->where('kortim.nokortim','LIKE','KT1%')
        ->leftJoin('users', 'users.id', '=', 'kortim.user_id')
        ->leftJoin('nbs_se','kortim.nokortim','=','nbs_se.nokortim')
        ->select('nbs_se.idkelurahan','nbs_se.nbs','kortim.nokortim','kortim.namakortim','nbs_se.bebanlisting','nbs_se.maxcacah');

        
        return Datatable::query($user)
        ->showColumns('idkelurahan','nbs','namakortim','bebanlisting','maxcacah')
        ->searchColumns('namakortim')
        ->orderColumns('idkelurahan','namakortim','bebanlisting','maxcacah')
        ->make();
    }

}
