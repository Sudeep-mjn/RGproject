<?php
include('../functions/myFunction.php');
if(isset($_SESSION['id'])){
    if($_SESSION['role'] !=1){
        redirect("../homepage.php", "you are not authoruzed to use this page");
        
    }
}else{
    redirect("../login.php", "Log in to continue");
}
?>