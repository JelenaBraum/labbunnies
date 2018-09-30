<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/product.php';
 
$database = new Database();
$db = $database->getConnection();
 
$regnumber = new Regnumber($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$regnumber->bunnyid = $data->bunnyid;
$regnumber->hemail = $data->hemail;
$regnumber->quests = $data->quests;
 
// create the product
if($regnumber->create()){
    echo '{';
        echo '"message": "Bunny ID was registered."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable proceed with registration."';
    echo '}';
}
?>
