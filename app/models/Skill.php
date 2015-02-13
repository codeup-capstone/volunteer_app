<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Skill extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'skills';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function users()
	{
	    return $this->belongsToMany('User');
	}

}