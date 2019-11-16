<?php

class Model
{
  protected static $tableName = '';
  protected static $columns = [];

  function __construct($arr)
  {
    $this->loadFromArray($arr);
  }

  public function loadFromArray($arr)
  {
    if ($arr) {
      foreach ($arr as $key => $value) {
        $this->set($key, $value);
      }
    }
  }

  public function get($arr)
  {
    return $this->values[$key];
  }

  public function set($key, $values)
  {
    $this->values[$key] = $values;
  }
}
