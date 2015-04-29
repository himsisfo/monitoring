<?php
class Jabatan extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jabatan';
	function user(){
		$this->hasMany('User');
	}

}