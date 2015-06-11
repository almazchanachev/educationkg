<?php

class District extends Eloquent{

	public $timestamps = false;

	public $guarded = [];

	public function region()
    {
        return $this->belongsTo('Region');
    }

    public function schools()
	{
		return $this->hasMany('schools');
	}
}