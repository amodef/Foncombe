<?php

class Player extends BaseModel {

  protected static $rules = [
    'name' => 'required|unique',
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