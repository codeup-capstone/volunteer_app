<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Review extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reviews';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	// Polymorphic relationship with users and agencies.

    public function reviewable()
    {
        return $this->morphTo();
    }

}