<?PHP
include('config.php');
include('header.php');

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<a href="dodaj.php" class="btn btn-primary">Dodaj Firmę</a>

<?php
include('footer.php');
?>