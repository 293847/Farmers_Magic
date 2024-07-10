<?php 
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$conn=new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('Connection Fail: '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration (Name, Email, Password) values(?, ? ,?)");
    $stmt->bind_param("sss",$firstname,$email,$pass);
    $stmt->execute();
    echo"Registration Sucessfull ......";
    $stmt->close();
    $conn->close();
}
?>