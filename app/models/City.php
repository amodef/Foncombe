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
		'name' => 'required|unique:cities',
		'xaxis' => 'required|numeric|between:1,800',
		'yaxis' => 'required|numeric|between:1,800',
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

  public function validate($input = null)
  {
    if (Input::get('_method') == 'PUT')
    {
      // Ignore values on record with same id, and allow empty password
      self::$rules['name'] .= ",name,$this->id";

      return parent::validate();
      
    } else {

      $xcities = City::where('xaxis', '=', Input::get('xaxis'))->get();
      foreach ($xcities as $city)
      {
        if ($city->yaxis == Input::get('yaxis')) return false;
      }

      return parent::validate();
    }
  }

}