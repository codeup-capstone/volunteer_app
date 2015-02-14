<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Activity extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function users()
	{
	    return $this->belongsToMany('User');
	}
	public function tags()
	{
	    return $this->belongsToMany('Tag');
	}
	public function location()
	{
	    return $this->belongsTo('Location');
	}
	public function agency()
	{
	    return $this->belongsTo('Agency');
	}

}