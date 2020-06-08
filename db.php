<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "sydneysoft_birthdaysandbeyond";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



// $query = "SET NAMES utf8";

// if($conn) {

// echo "We are connected";

// }








?>