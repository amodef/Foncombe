<?

class Ally extends BaseModel {

  public $power;

  protected static $rules = [
    'name' => 'required|unique:allies'
  ];

  protected $fillable = ['name'];

  public function validate($input = null)
  {
    if (Input::get('_method') == 'PUT')
    {
      // Ignore values on record with same id, and allow empty password
      self::$rules['name'] .= ",name,$this->id";
    }

    return parent::validate();
  }

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