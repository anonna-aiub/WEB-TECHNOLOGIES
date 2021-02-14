<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $passErr = $CpassErr = $unameErr = "";
$name = $email = $gender = $password = $Cpassword = $uname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($name)) {
    $nameErr = "Name is required";
  }

  if (empty($username)) {
    $unameErr = "UserName is required";
   }
    elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $unameErr = "Invalid Username!";
    }
    elseif (strlen($username) < 5) {
        $unameErr = "Username must be Five charecter long";
    }
  
  if (empty($email)) {
    $emailErr = "Email is required";
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
   
  if (empty($password)) {
    $passErr = "Password is required";
 }
 elseif (!preg_match("[-a-z0-9+&@#\/%]*[-a-z0-9]/i",$password)) {
     
 $passErr = "Invalid Password Formate!";

 }
 elseif (strlen($password) < 8) {
     $passErr = "Password Must be Eight charecter Long";
 }

  if (empty($Cpassword)) {
    $CpassErr = "Enter the Password Again";
  }
  elseif ($password != $Cpassword) {
    $Cpassword = "Password do not match";
  }

  if (empty($gender)) {
    $genderErr = "Gender is required";
  }
}
?>

<h2>Registration Form!</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="error"> <?php echo $unameErr;?></span>
  <br><br>
  Password : <input type="password" name="password">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  Confirm Password : <input type="password" name="Cpassword">
  <span class="error"> <?php echo $CpassErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>