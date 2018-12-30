<!DOCTYPE html>
<?php
  session_start();
  include('connect.php') ;



  if (isset($_POST['email'])  && ($_POST['email'] !== '')) {

    $mail =$_POST['email'];
    //$pass =$_POST['password'];
    $pass =md5($_POST['password']);


    $q = "SELECT `email` , `password` FROM `user` WHERE `email` ='$mail' AND `password` = '$pass' LIMIT 1";
    $result=mysqli_query($db,$q);

  if ($result)
   {
     $_SESSION['loggedIn']==1;
     $_SESSION['userId'] = header('Location:loggedIn.php');
   }
   else
    {
     echo "wrong password or email";
   }

  if($_SESSION['loggedIn']==0)
  {
  echo "Logged out successfully";
  }

  }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

  </head>
  <body>

    <form class="" action="#" method="post">
      <P> Enter the email:<input type="text" name="email">
      <p> Enter the password:<input type="password" name="password">
      <input type="submit" name="submit" value="login">
    </form>
  </body>
</html>
