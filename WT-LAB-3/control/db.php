<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password,$email,$name,$gender)
 {
//$res = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
$result = $conn->query("INSERT INTO user (name, email, username, password, gender) VALUES ('$name','$email','$username','$password','$gender')");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>