<?php

class School extends Eloquent{

	public $timestamps = false;

	public $guarded = [];

	public function district()
    {
        return $this->belongsTo('District');
    }

    public function students()
	{
		return $this->hasMany('students');
	}
}