<?PHP
include('config.php');
include('header.php');

$info = ($_GET['info']);



if ($info == 1) { echo '<center><b><font size="3" color="white">Dodano pomyślnie :)</font></b></center>'; }
elseif ($info == 2) { echo '<center><b><font size="3" color="white">Edytowano pomyślnie :)</font></b></center>'; }
elseif ($info == 3) { echo '<center><b><font size="3" color="white">Usunięto pomyślnie :)</font></b></center>'; }
else { echo '<center><b><font size="3" color="white">coś poszło nie tak</font></b></center>';}



?>



<?PHP
include('footer.php');
?>