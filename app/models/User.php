<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $hidden = array('password', 'remember_token');

	    /**
     * Get key in array with corresponding value
     *
     * @return int
     */
    private function getIdInArray($array, $term)
    {
        foreach ($array as $key => $value) {
            if ($value == $term) {
                return $key+1;
            }
        }
 
        throw new UnexpectedValueException;
    }

	public function korwil(){
		return $this->hasOne('Korwil');
	}	


	public function kortim(){
		return $this->hasOne('Kortim');
	}	

	public function korlap(){
		return $this->hasOne('Korlap');
	}	

	public function dosen(){
		return $this->hasOne('Dosen');
	}	

	public function pcl(){
		return $this->hasOne('Pcl');
	}	

	public function bidang(){
		return $this->belongsTo('Bidang');
	}


	public function jabatan(){
		return $this->belongsTo('Jabatan');
	}

}

