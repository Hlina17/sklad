<?php

include 'SQL.php';
include 'config.php';

class User
{
  public $name;
  public $surname;
  public $email;
  public $password;
  public $phone_number;
  public $date_of_birth;
  public $table = "users";
  function __construct($name, $surname, $email, $password, $phone_number, $date_of_birth)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->password = $password;
    $this->phone_number = $phone_number;
    $this->date_of_birth = $date_of_birth;
  }

  /**
   * Insert new user into database
   * @return void
   */
  public function insert()
  {
    global $servername, $username, $password, $dbname;
    $sql = new SQL();
    $sql->connect($servername, $username, $password, $dbname);
    foreach (get_object_vars($this) as $property => $value) {
      if ($property == 'table') {
        continue;
      }
      $columns[] = $property;
      $values[] = $value;
    }
    $columns_str = implode(", ", $columns);
    $values_str = "'" . implode("', '", $values) . "'";
    $sql->insert($this->table, $columns_str, $values_str);
  }

  public function find()
  {
    global $servername, $username, $password, $dbname;
    $sql = new SQL();
    $sql->connect($servername, $username, $password, $dbname);
    $email = $sql->select($this->table, "*")->where('email', '=', $this->email,);
    $email = $email->getQuery();
    var_dump($email);
  }
}
