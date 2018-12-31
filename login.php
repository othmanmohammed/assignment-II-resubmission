<!DOCTYPE html>
<?php
  session_start();
  include 'connect.php';

    if (isset($_POST['login'])) {

    $mail =$_POST['email'];
    $pass =$_POST['password'];
    //$pass =md5($_POST['password']);

    $q="SELECT * FROM `users` WHERE `email` = '$mail' AND `password` = '$pass' ";

    $run=mysqli_query($db,$q);
    $row=mysqli_fetch_assoc($run);

    if(count($row > 0)){
      $_SESSION['id']=$row['id'];
      $_SESSION['email']=$row['email'];
      header('Location:index.php');
    }
    else {
      echo'Please enter the correct password';
    }

 }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

  </head>
  <body>

    <form action="#" method="post">
      <P> Enter the email:<input type="text" name="email">
      <p> Enter the password:<input type="password" name="password">
      <input type="submit" name="login" value="login">
    </form>
  </body>
</html>
