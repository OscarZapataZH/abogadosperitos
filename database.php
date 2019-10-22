<?php 
 
$localhost = "127.0.0.1"; 
$username = "abogad57_admin"; 
$password = "GomezMauricio3097"; 
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
