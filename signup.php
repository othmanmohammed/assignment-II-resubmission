<!DOCTYPE html>

<?php

  session_start();
  include('connect.php');

  if (isset($_POST['submit'])) {

  $my_name =$_POST["name"];
  $my_mail= $_POST["email"];
  $my_pass= md5($_POST["password"]);

  $q = "INSERT INTO `users` ( `name` , `email` , `password`)
   VALUES ('$my_name' , '$my_mail' , md5('$my_pass'))";

  if (mysqli_query($db,$q)) {
    echo "Signed up";
    }
    else
    {
     echo "sorry unable to signed up";
    }
  }
?>

<html>
  <head>
    <title>Sign Up</title>
  </head>

  <body>

    <form class="" action="#" method="post">
      <p> Name :<input type="text" name="name">
      <p> Password :<input type="password" name="password">
      <p> Email : <input type="text" name="email"> <br>
    <input type="submit" name="submit" value="signup">
    </form>

  </body>
</html>
