<?php
/**
 *  class Bdd
 *  Permet la connexion à la db
 */
Abstract class Database
{

  protected $db;
  private $db_host      = "crocwebayt982.mysql.db";
  private $db_name      = "crocwebayt982";
  private $db_login     = "crocwebayt982";
  private $db_password  = "Blo33800dophiures";

  public function __construct()
  {
    $db = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset=utf8', $this->db_login, $this->db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $this->db = $db;
  }
}
