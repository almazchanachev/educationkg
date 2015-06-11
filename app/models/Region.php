<?php 

class Region extends Eloquent{

	public $timestamps = false;

	public $guarded = [];

	public function districts()
	{
		return $this->hasMany('districts');
	}
}