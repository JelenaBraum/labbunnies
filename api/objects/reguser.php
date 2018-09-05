<?php
class Reguser{
 
    // database connection and table name
    private $conn;
    private $table_name = "regusers";
 
    // object properties
    public $bunnyidnum;
    public $name;
    public $surname;
    public $email;
    public $birthyear;
    public $country;
    public $town;
    public $language;
    public $toxo;
    public $rhd;
    public $emailcheck;
    public $notes;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
