<?PHP
include('config.php');
include('header.php');
?>


<?php

 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 


<a href="index.php">Strona Główna</a> || <a href="dodaj.php">Dodaj Firmę</a>




<?PHP


include('footer.php');
?>