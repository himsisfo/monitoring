<?php
class Korlap extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $primaryKey = 'nokorlap';
	protected $table = 'korlap';
	function user(){
		$this->belongsTo('User');
	}

}