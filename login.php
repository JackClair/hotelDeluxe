<?php
require_once('database/connect.php');
if (isset($_POST['submit']))
{
  $username = $_POST['UserName'];
  $password = $_POST['password'];

  $sql = "SELECT username, password FROM tblLogin";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
   {
     $checking = 1;
    while($row = $result->fetch_assoc())
     {
        if ($username === $row["username"] and $password === $row["password"])
        {
          $checking = 2;
          header("Location: menu.html");
        }
     }
     if ($checking == 2)
     {
      $message = 'Invalid Input!';
      echo "<script type='text/javascript'>alert('$message');</script>";
     }
   }
  else
  {
   
   }
 }
  $conn->close();
?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in </title>
  </head>
  <body>
    <form action="login.php" method="post">
      <h3>Username: </h3>
      <input type="text" name="UserName" >
      <h3>Password: </h3>
      <input type="password" name="Password" >
      <input type="submit" name="add" value="Log in">
    </form>
    <a href="#">Add new user</a>
  </body>
</html> -->
