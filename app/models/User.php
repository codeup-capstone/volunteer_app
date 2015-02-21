<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends BaseModel implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('email', 'first_name', 'last_name', 'image_url', 'profile', 'phone', 'city', 'state', 'zip');

	protected $table = 'users';

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
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value) {
		$this->attributes['password'] = Hash::make($value);
	}
	public function skills()
	{
		return $this->belongsToMany('Skill');
	}
	public function agencies()
	{
	    return $this->belongsToMany('Agency');
	}
	public function reviews()
	{
		return $this->morphMany('Review', 'reviewable');
	}
	public function activities() {
		return $this->belongsToMany('Activity');
	}

	public function uploadImage($file)
	{
		$filename = $file->getClientOriginalName();
		$new_images = $file->move(public_path('img/user'), $filename);
		$this->attributes['image_url'] = "/img/user" . "/" . $filename;
	}

}