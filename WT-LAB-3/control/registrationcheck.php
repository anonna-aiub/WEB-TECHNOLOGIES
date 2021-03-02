<?php
include('db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name'])) {
$error = "enter your name!";
}
if (empty($_POST['email'])) {
  $error = "enter a valid email address!";
  }
if (empty($_POST['username'])) {
$error = "enter username!";
}
if (empty($_POST['password'])) {
  $error = "Password required";
  }
if (empty($_POST['repassword']) && (($_POST['repassword']) != ($_POST['password']))) {
$error = "Password Does not match !";
}

else
{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$gender=$_POST['gender'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"user",$username,$password,$email,$name,$gender);

if ($userQuery) {
 
echo "Record Submitted!";
   }
 else {
$error = "Error!!!";
}
$connection->CloseCon($conobj);

}
}


?>
