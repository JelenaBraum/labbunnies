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

// create product
function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                bunnyid=:bunnyid, hemail=:hemail, quests=:quests";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->bunnyid=htmlspecialchars(strip_tags($this->bunnyid));
    $this->hemail=htmlspecialchars(strip_tags($this->hemail));
    $this->quests=htmlspecialchars(strip_tags($this->quests));
 
    // bind values
    $stmt->bindParam(":bunnyid", $this->bunnyid);
    $stmt->bindParam(":hemail", $this->hemail);
    $stmt->bindParam(":quests", $this->quests);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
}
