<?PHP
include('config.php');
include('header.php');
$numer = ($_GET['numer']);
?>



<?php
// Initialize the session
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

$sql = "SELECT id, nazwa, wlasciciel_imie, wlasciciel_nazwisko, opis, NIP, logo_link, strona, tel FROM firmy WHERE id = $numer";
$result = $link->query($sql);
$row2 = $result->fetch_assoc();

echo '
<table><tr><td>
<div class="table-responsive">
<table class="table table-dark">
<thead>
<tr>
<th>Logo</th>
<th>Nazwa</th>
<th>Właściciel</th>
<th>NIP</th>
<th>Strona</th>
<th>Opis</th>
<th>Kontakt</th>
<tr>
<td><img width="100" src="'.$row2["logo_link"].'"></td>
<td>'.$row2["nazwa"].'</td>
<td>'.$row2["wlasciciel_imie"].' '.$row2["wlasciciel_nazwisko"].'</td>
<td>'.$row2["NIP"].'</td>
<td><a class="website-link" href="'.$row2["strona"].'" target="blank">'.$row2["strona"].'</a></td>
<td>'.$row2["opis"].'</td>
<td>'.$row2["tel"].'</td>
</tr>
</tbody>
</table>
</div>';
?>

<center><font size="12" color="white">Jesteś pewien/pewna że chces usunąć tą firmę?</font></center>



<form method="post" action="<?php $_PHP_SELF ?>">
<center><input name="submit" type="submit" class="btn btn-primary" value="Tak Usuń"></center></form>






<?php

if (isset($_POST['submit']))
{
$sqldel = "DELETE from firmy
WHERE id = $numer";
$result = $link->query($sqldel);
echo '<script type="text/javascript">
window.location = "informacja.php?info=3";
</script>';
}


?>