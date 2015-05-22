<?php

class OtherController extends Controller {
	public function getCurrentTime(){
        $mytime = Carbon\Carbon::now();
        return $mytime->toDateTimeString();
    }
    public function showGame(){
    	return View::make('extra/game');
    }

}
