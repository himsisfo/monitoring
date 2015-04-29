<?php
class Bidang extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bidang';
	function user(){
		$this->hasMany('User');
	}

}