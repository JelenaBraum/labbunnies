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
 
 // read regnumbers
function read(){
 
    // select all query
    $query = "SELECT
                bunnyid, hemail, quests
            FROM
                " . $this->table_name . " 

    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
}
