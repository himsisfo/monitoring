<?php

class GameController extends Controller {


	public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function showGame(){
    	return View::make('extra/game');
    }

}
