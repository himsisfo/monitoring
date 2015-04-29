<?php

class CapiSKB5 extends Eloquent {

    protected $connection = 'mysqlcapisk';
    protected $table = 'b5';
    protected $primaryKey = 'nksb5';
    function capiskb1(){
        return $this->belongsTo('CapiSKB1','nks');
    }
}