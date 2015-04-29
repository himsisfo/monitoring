<?php

class B1 extends Eloquent {

    protected $connection = 'mysqlcapi';
    protected $table = 'b1';
	protected $primaryKey = 'nks';

	public function b3(){
		return $this->hasOne('B3','nks');
	}

}