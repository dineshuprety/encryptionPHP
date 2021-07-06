<?php

class  Database {

    private $host = "localhost";
    private $dbname = "encryption";
    private $username = "root";
    private $password = "";
    protected $con;

    public function __construct(){
      try{
          // new PDO("mysql:host=localhost;dbname=mobilepasal","root","");
          $this->con = new PDO("mysql:host=" . $this->host .";dbname=" .$this->dbname, $this->username, $this->password );
        //    echo"Connection ok";
      }
      catch(Exception $e){
        echo"Database Connection Problems" .$e->getMessage();
      }
    }
   
  }