<?php

class Position extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'positions';

	protected $fillable = array('name', 'ally', 'xaxis', 'yaxis', 'power');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');

}