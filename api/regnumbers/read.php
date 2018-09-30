<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$regnumber = new Regnumber($db);
 
// query products
$stmt = $regnumber->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $regnumbers_arr=array();
    $regnumbers_arr["records"]=array();
 
    // retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $regnumber_item=array(
            "bunnyid" => $bunnyid,
            "hemail" => $hemail,
            "quests" => $quests,
            "price" => $price,
        );
 
        array_push($regnumbers_arr["records"], $regnumber_item);
    }
 
    echo json_encode($regnumbers_arr);
}
 
else{
    echo json_encode(
        array("message" => "No registered users found.")
    );
}
?>
