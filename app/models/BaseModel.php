<?php

class BaseModel extends Eloquent {

  public $errors;

  public function validate($input = null)
  {
    if (is_null($input)) $input = Input::all();
    $v = Validator::make($input, static::$rules);

    if ($v->passes()) return true;

    $this->errors = $v->messages();
    return false;
  }
}