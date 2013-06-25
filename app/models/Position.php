<?php

class Position extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'positions';

	protected static $rules = [
		'name' => 'required',
		'ally' => 'required',
		'xaxis' => 'required|numeric',
		'yaxis' => 'required|numeric',
		'power' => 'required|numeric'
	];

	protected $fillable = array('name', 'ally', 'xaxis', 'yaxis', 'power');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');

}