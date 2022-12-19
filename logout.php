<?php 
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
   
    $_SESSION['message'] = "Log out Succesfully!";
}
header('location: homepage.php');
?>