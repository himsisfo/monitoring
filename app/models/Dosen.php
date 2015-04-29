<?php
class Dosen extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dosen';
	
	protected $primaryKey = 'iddosen';
	function user(){
		$this->belongsTo('User');
	}

}