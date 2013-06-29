<?

class Ally extends BaseModel {

  public $power;

  protected static $rules = [
    'name' => 'required'
  ];

  protected $fillable = array('name');

  public function setPower()
  {
    $players = $this->players;
    
    foreach ($players as $player)
    {
      $this->power += $player->power;
    }

    return true;
  
  }

  public function players()
  {
    return $this->hasMany('Player');
  }

}