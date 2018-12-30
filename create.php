<!DOCTYPE html>
<?php

include('connect.php');

  // to set this should work only if the submit is pressed

if(isset($_GET['login']) && !empty($_GET['input_name']) && !empty($_GET['input_cell'])){

  //taking data from the user by get methord
  $name=$_GET['input_name'];
  $email=$_GET['input_email'];
  $mycell=$_GET['input_cell'];

  //if($name !='' && $mycell !='') {

  //$db=mysqli_connect('localhost','root','erozgar','assignment_2');
  $q ="INSERT INTO `dir` (`name`,`cell_number`,`email`) VALUES ('$name','$mycell','$email')";

//} // end of if for connecting the data base
/*
else {
  echo 'Please enter the name to connect to the data base';
}*/

  if (mysqli_query($db,$q)){
    echo 'Data created';
  }
  else {
    echo 'Please try again';
  }


  } //end of if(isset) statement
  else {
    echo'Please enter the name and the number';
  }

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
  </head>
  <body>

    <form class="" action="create.php" method="get">
      Name :<input type="text" name="input_name" value="<?php if(isset($_GET['input_name'])) echo $_GET['input_name']; ?>"> <br><br> <!-- sticky form -->
      Cell #:<input type="text" name="input_cell" value="<?php if(isset($_GET['input_cell'])) echo $_GET['input_cell']; ?>"> <br><br>
      Email :<input type="text" name="input_email" value="<?php if(isset($_GET['input_email'])) echo $_GET['input_email']; ?>"> <br><br>
      <input type="submit" name="login" value="create">
    </form>

  </body>
</html>
