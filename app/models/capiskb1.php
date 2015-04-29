<?php

class CapiSKB1 extends Eloquent {

    protected $connection = 'mysqlcapisk';
    protected $table = 'b1';
	protected $primaryKey = 'nks';

	public function capiskb3(){
            return $this->hasOne('CapiSKB3');
	}

}