<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/regnumber.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare regnumber object
$regnumber = new Regnumbers($db);
 
// set ID property of regnumber to be edited
$regnumber->bunnyid = isset($_GET['bunnyid']) ? $_GET['bunnyid'] : die();
 
// read the details of regnumber to be edited
$regnumber->readOne();
 
// create array
$regnumber_arr = array(
    "bunnyid" =>  $regnumber->bunnyid,
    "hemail" => $regnumber->hemail,
    "quests" => $regnumber->quests,
);
 
// make it json format
print_r(json_encode($regnumber_arr));
?>
