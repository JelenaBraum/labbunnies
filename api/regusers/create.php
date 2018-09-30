<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate reguser object
include_once '../objects/reguser.php';
 
$database = new Database();
$db = $database->getConnection();
 
$reguser = new Reguser($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set reguser property values
$reguser->bunnyidnum = $data->bunnyidnum;
$reguser->name = $data->name;
$reguser->surname = $data->surname;
$reguser->gender = $data->gender;
$reguser->email = $data->email;
$reguser->birthyear = $data->birthyear;
$reguser->placeoforigin = $data->placeoforigin;
$reguser->currentplace = $data->currentplace;
$reguser->language = $data->language;
$reguser->toxo = $data->toxo;
$reguser->ab0 = $data->ab0;
$reguser->rhd = $data->rhd;
$reguser->emailcheck = $data->emailcheck;
$reguser->notes = $data->notes;

 
// create the product
if($regnumber->create()){
    echo '{';
        echo '"message": "Bunny ID was registered."';
    echo '}';
}
 
// if unable to register, tell the user
else{
    echo '{';
        echo '"message": "Unable proceed with registration."';
    echo '}';
}
?>
