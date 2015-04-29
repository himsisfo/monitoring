<?php
class Korwil extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $primaryKey = 'nokorwil';
	protected $table = 'korwil';
	function user(){
		$this->belongsTo('User');
	}

}