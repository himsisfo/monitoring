<?php
class Kecamatan extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'kecamatan';

	public function getProgressListing(){
		if($this->kota==='09' || $this->kota==='02'){
			$ret = 0;
			$s = Nbsse::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->progressListing;
			}
			return $ret;
		}
		elseif($this->kota==='73' || $this->kota==='12'){
			$ret = 0;
			$s = Nbssk::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->progressListing;
			}
			return $ret;
		}
	}

	public function getBebanListing(){
		if($this->kota==='09' || $this->kota==='02'){
			$ret = 0;
			$s = Nbsse::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->bebanListing;
			}
			return $ret;
		}
		elseif($this->kota==='73' || $this->kota==='12'){
			$ret = 0;
			$s = Nbssk::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->bebanListing;
			}
			return $ret;
		}
	}

	public function getProgressCacah(){
		if($this->kota==='09' || $this->kota==='02'){
			$ret = 0;
			$s = Nbsse::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->cacah;
			}
			return $ret;
		}
		elseif($this->kota==='73' || $this->kota==='12'){
			$ret = 0;
			$s = Nbssk::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->cacah;
			}
			return $ret;
		}
	}

	public function getBebanCacah(){
		if($this->kota==='09' || $this->kota==='02'){
			$ret = 0;
			$s = Nbsse::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->maxcacah;
			}
			return $ret;
		}
		elseif($this->kota==='73' || $this->kota==='12'){
			$ret = 0;
			$s = Nbssk::where('idkecamatan','=',$this->idkecamatan)->where('kota','=',$this->kota)->get();
			foreach($s as $row){
				$ret+=$row->maxcacah;
			}
			return $ret;
		}
	}
}