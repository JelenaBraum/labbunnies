<?php
class Regnumber{
 
    // database connection and table name
    private $conn;
    private $table_name = "regnumbers";
 
    // object properties
    public $bunnyid;
    public $hemail;
    public $quests;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
