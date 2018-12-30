<?php
session_start();

if($_SESSION['logedin']==1){

 header('Location:index.php');

}else{

header('Location:login.php');

}
