<?php 
 
$localhost = "127.0.0.1"; 
$username = "abogad57_root"; 
$password = "_u2?]&_M&rC8"; 
$dbname = "abogad57_peritos"; 
 
// create connection 
$connect = new mysqli($localhost, $username, $password, $dbname); 
 
// check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}
 
?>