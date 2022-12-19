<?php 
// $username = "root";
// $password ="";
// $host = "localhost";
// $dbname= "rgproject";

// $Name = $_POST['Name'];
// $Address = $_POST['Address'];
// $Email = $_POST['Email'];
// $Password = $_POST['Password'];
// $Confirmpassword = $_POST['Confirm-Passowrd'];


// $conn = new mysqli( 'localhost', 'root', '', 'rgproject');

// if($conn->connect_error){
//     die('Connection Failed :' .$conn->connect_error);
// }else{
//     $stmt = $conn->prepare("insert into signup(Name, Address, Email, Password, Confirm-Passowrd)
//     valuse(?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssss",$Name, $Address, $Email, $Password, $Confirmpassowrd);
//     $stmt->execute();
//     echo "registration successfull...";
//     $stmt->close();
//     $conn->close();
// }    



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
 
 