<?php
$username ="root";
$password = "";
$host ="localhost";
$dbname= "rgproject"; 


$con = mysqli_connect($host, $username, $password, $dbname);

if(!$con){
    echo mysqli_connect_error();
}else{
    // echo "connection success";

}
?>