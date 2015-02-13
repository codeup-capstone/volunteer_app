<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Agency extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'agencies';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function users()
	{
	    return $this->belongsToMany('User');
	}
	public function events()
	{
	    return $this->hasMany('Event');
	}
	public function locations()
	{
	    return $this->hasMany('Location');
	}
	public function categories()
	{
	    return $this->belongsTo('Category');
	}
	public function reviews()
	{
		return $this->morphMany('Review', 'reviewable');
	}

}