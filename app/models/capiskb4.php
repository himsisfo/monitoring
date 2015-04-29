<?php

class CapiSKB4 extends Eloquent {

    protected $connection = 'mysqlcapisk';
    protected $table = 'b4';
    protected $primaryKey = 'nksb4';
    function capiskb1(){
        return $this->belongsTo('CapiSKB1','nks');
    }
}