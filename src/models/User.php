<?php

// require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(dirname(__FILE__) . '/Model.php'));

class User extends Model
{
  protected static $tableName = 'users';
  protected static $columns = [
    'id',
    'name',
    'password',
    'email',
    'starte_date',
    'end_date',
    'is_admin',
  ];
}
