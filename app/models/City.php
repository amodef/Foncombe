<?php

class City extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cities';

	public function player()
  {
    return $this->belongsTo('Player')->orderBy('players.name');
  }

	protected static $rules = [
		'name' => 'required',
		'xaxis' => 'required|numeric',
		'yaxis' => 'required|numeric',
    'player_id' => 'required'
	];

	protected $fillable = ['name', 'xaxis', 'yaxis', 'player_id'];

	public static function setPlayerList()
	{
		$playerList = [];
		$players = Player::orderBy('name', 'asc')->get(['id', 'name']);

    foreach ($players as $player)
    {
      $playerList[$player->id] = $player->name;
    }

    return $playerList;
	}

	public function getAlly()
	{
		return Ally::find(Player::find($this->player_id)->ally_id);
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');

}