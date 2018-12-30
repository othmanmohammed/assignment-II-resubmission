<!DOCTYPE html>
<?php
  include('connect.php');

  if(isset($_GET['ed']) && $_GET['ed'] !=''){
  $userid=$_GET['ed'];
}
  if(isset($_GET['edit'])){
    $userid=$_GET['to_edit_id'];
    $newname=$_GET['to_edit_name'];
    $newemail=$_GET['to_edit_email'];
    $newcell=$_GET['to_edit_number'];

  $q="UPDATE `dir` SET `name`='$newname' ,`cell_number`='$newcell' ,`email`='$newemail' WHERE `id` = '$userid' ";

  if(  $query= mysqli_query($db,$q)){
    echo 'Update sucessfull';
    header('Location:index.php');
  }
  else {
    echo 'Please try again';
  }
}

?>
<html>
  <head>
    <meta>
    <title>Edit</title>
  </head>
  <body>
    <form class='' action='# method='get'>
      New name :<input type='text' name='to_edit_name' value=''>
      New number :<input type='number' name='to_edit_number' value=''>
      New email :<input type='text' name='to_edit_email' value=''>
      <input  type='hidden' name='to_edit_id' value='<?php  echo $userid;  ?>'>
      <input type='submit' name='edit' value='update'>

    </form>
  </body>
</html>
