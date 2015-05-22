<?php
class Kortim extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $primaryKey = 'nokortim';

	protected $table = 'kortim';
	function user(){
		$this->belongsTo('User');
	}

	function bebanListing(){
		
	}

}