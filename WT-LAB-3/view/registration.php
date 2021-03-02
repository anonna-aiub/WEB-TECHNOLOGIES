<?php
include('../control/registrationcheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Registration</h2>

<form action="" method="post">
    Name : <input type="text" name="name" >
    <br><br>
    Email : <input type="text" name="email" p >
    <br><br>
    username : <input type="text" name="username" >
    <br><br>
    
    Password : <input type="password" name="password" >
    <br><br>
    Confirm Password : <input type="password" name="repassword">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input name="submit" type="submit" value="SUBMIT">
</form>
<br>
<?php echo $error; ?>

</body>
</html>