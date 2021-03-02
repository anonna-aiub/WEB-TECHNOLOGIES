<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1> My Registration Page </h1>


<form>
<table>
<tr><td> First Name: </td>
<td><input type="text" name="firstname"></td></tr>

<tr>
<td>Email: </td>
<td><input type="text" name="email"</td></tr>

<tr><td> User Name: </td>
<td><input type="text" name="username"></td></tr>

<tr>
<td>Password: </td>
<td><input type="password" name="password"></td></tr>

<tr><td>Gender:
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  </tr></td>

  <tr><td>Date of Birth:
  <input type="date" id="dob" name="DOB"></tr></td>

  <tr><td>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
  </tr></td>

</table>
</form>

</body>
</html>

