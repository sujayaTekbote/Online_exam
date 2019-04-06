<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];

$email = $_POST['ename'];
$password = $_POST['password'];
$name=$_POST['uname'];
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);
$name=stripslashes($name);
$name= addslashes($name);

$result = mysqli_query($con,"SELECT email FROM admin WHERE name = '$name' and email = '$email' and password='$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
session_start();
if(isset($_SESSION['email'])){
session_unset();}
$_SESSION["name"] = $name;
$_SESSION["key"] ='meandmyself';
$_SESSION["email"] = $email;
header("location:dash.php?q=0");
}
else header("location:$ref?w=Warning : Access denied");
?>
