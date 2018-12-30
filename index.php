<?php
  include('connect.php');

  if(isset($_GET['del']) && $_GET['del'] !='') {
  $del_id=$_GET['del'];
  $q="DELETE FROM `dir` WHERE id=$del_id";
  $query=mysqli_query($db,$q);
}

  $q = 'SELECT * FROM `dir`';
  $query=mysqli_query($db,$q);

?>

<table border="1px" >
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
<?php
  while ($row=mysqli_fetch_assoc($query)) {

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $cell = $row['cell_number'];

    echo "<tr><td>$name</td> <td>$email</td> <td>$cell</td> <td><a href='?del=$id'>delete</a></td> <td><a href=update.php?ed=$id'>Update</a></td></tr>";

  }
?>
</table>
