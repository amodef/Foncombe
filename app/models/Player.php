<?php

class Player extends BaseModel {

  protected static $rules = [
    'name' => 'required|unique:players',
    'power' => 'required|numeric',
    'ally_id' => 'required'
  ];

  protected $fillable = ['name', 'power', 'ally_id'];

  public function ally()
  {
    return $this->belongsTo('Ally');
  }

  public function cities()
  {
    return $this->hasMany('City');
  }

  public function validate($input = null)
  {
    if (Input::get('_method') == 'PUT')
    {
      // Ignore values on record with same id, and allow empty password
      self::$rules['name'] .= ",name,$this->id";
    }

    return parent::validate();
  }

  public static function setAllyList()
  {
    $allyList = [];
    $allies = Ally::orderBy('name', 'asc')->get(['id', 'name']);

    foreach ($allies as $ally)
    {
      $allyList[$ally->id] = $ally->name;
    }

    return $allyList;
  }



}