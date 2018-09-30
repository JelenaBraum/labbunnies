<?php
class Reguser{
 
    // database connection and table name
    private $conn;
    private $table_name = "regusers";
 
    // object properties
    public $bunnyidnum;
    public $name;
    public $surname;
    public $sex;
    public $email;
    public $birthyear;
    public $placeoforigin;
    public $currentplace;
    public $language;
    public $toxo;
    public $ab0;
    public $rhd;
    public $emailcheck;
    public $notes;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
 
 // register user
function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                bunnyidnum=:bunnyidnum, name=:name, surname=:surname, gender=:gender, email=:email, birthyear=:birthyear, placeoforigin=:placeoforigin, currentplace=:currentplace, language=:language, toxo=:toxo, ab0=:ab0, rhd=:rhd, emailcheck=:emailcheck, notes=:notes";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->bunnyidnum=htmlspecialchars(strip_tags($this->bunnyidnum));
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->surname=htmlspecialchars(strip_tags($this->surname));
    $this->gender=htmlspecialchars(strip_tags($this->gender));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->birthyear=htmlspecialchars(strip_tags($this->birthyear));
    $this->placeoforigin=htmlspecialchars(strip_tags($this->placeoforigin));
    $this->currentplace=htmlspecialchars(strip_tags($this->currentplace));
    $this->language=htmlspecialchars(strip_tags($this->language));
    $this->toxo=htmlspecialchars(strip_tags($this->toxo));
    $this->ab0=htmlspecialchars(strip_tags($this->ab0));
    $this->rhd=htmlspecialchars(strip_tags($this->rhd));
    $this->emailcheck=htmlspecialchars(strip_tags($this->emailcheck));
    $this->notes=htmlspecialchars(strip_tags($this->notes));
 
 
    // bind values
    $stmt->bindParam(":bunnyidnum", $this->bunnyidnum);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":surname", $this->surname);
    $stmt->bindParam(":gender", $this->gender);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":birthyear", $this->birthyear);
    $stmt->bindParam(":placeoforigin", $this->placeoforigin);
    $stmt->bindParam(":currentplace", $this->currentplace);
    $stmt->bindParam(":language", $this->language);
    $stmt->bindParam(":toxo", $this->toxo);
    $stmt->bindParam(":ab0", $this->ab0);
    $stmt->bindParam(":rhd", $this->rhd);
    $stmt->bindParam(":emailcheck", $this->emailcheck);
    $stmt->bindParam(":notes", $this->notes);
 
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
 
}
