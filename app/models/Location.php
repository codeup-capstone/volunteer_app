<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Location extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	public static $rules = array(
			'first_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
			'last_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
		    'email'  	=> 'Required|Between:3,64|Email|Unique:users',
			'password'	=>'Required|AlphaNum|Between:4,15|Confirmed'
		);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function activities()
	{
	    return $this->hasMany('Activity');
	}
	public function agency()
	{
	    return $this->belongsTo('Agency');
	}

}