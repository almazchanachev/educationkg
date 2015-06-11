<?php 

class Student extends Eloquent{

	public $timestamps = false;

	public $guarded = ['id'];

	public function school()
    {
        return $this->belongsTo('School');
    }
}