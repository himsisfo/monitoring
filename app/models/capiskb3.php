<?php

class CapiSKB3 extends Eloquent {

    protected $connection = 'mysqlcapisk';
    protected $table = 'b3';
    protected $primaryKey = 'nksb3';
    function capiskb1(){
        return $this->belongsTo('CapiSKB1','nks');
    }
}