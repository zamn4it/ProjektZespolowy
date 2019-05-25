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

?>
<center><table width="1024"><tr><td>
<body bgcolor="#59b7ff">
<center><font size="12" color="white">Edytuj Firmę:</font><br><br>
<form method="post" action="<?php $_PHP_SELF ?>">
<?php    
echo '
<table><tr>
<td>
<table border="0">
<tr>
<td width="200"><font color="white">Nazwa Firmy</font></td><td><input class="form-control" name="upnazwa" type="text" value="'. $row2["nazwa"].'"></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Imię właściciela</font></td><td><input class="form-control" name="upimie" type="text" value="'. $row2["wlasciciel_imie"].'"></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Nazwisko właściciela</font></td><td><input class="form-control" name="upnazwisko" type="text" value="'. $row2["wlasciciel_nazwisko"].'"></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Telefon</font></td><td><input placeholder="111-111-111" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" id="phone" class="form-control" name="uptelefon" type="text" value="'. $row2["tel"].'"></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">NIP Firmy</font></td><td><input class="form-control" name="upnip" type="text" value="'. $row2["NIP"].'"></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Opis Firmy</font></td><td><textarea class="form-control" name="upopis" rows="4" cols="50">'. $row2["opis"].'</textarea></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Link do firmy</font></td><td><textarea class="form-control" name="uplink" rows="4" cols="50">'. $row2["strona"].'</textarea></td></tr><tr>
<td width="200" height="20"></td><td></td></tr><tr>
<td width="200"><font color="white">Link do LOGO</font></td><td><textarea class="form-control" name="uplogo" rows="4" cols="50">'. $row2["logo_link"].'</textarea></td></tr><tr>
</table>
</td><tr><tr>
<td valign="top">
';
echo '<br><center>
<input name="dodaj" type="submit" class="btn btn-primary" value="Edytuj"></center></form>
</td></tr></table></center>
';
?>



<?php

if(isset($_POST['dodaj']))
{
$xnazwa = $_POST['upnazwa'];
$ximie = $_POST['upimie'];
$xnazwisko = $_POST['upnazwisko'];
$xtelefon = $_POST['uptelefon'];
$xnip = $_POST['upnip'];
$xopis = $_POST['upopis'];
$xlink = $_POST['uplink'];
$xlogo = $_POST['uplogo'];
 
$sql = "UPDATE firmy SET 
nazwa = '$xnazwa', 
wlasciciel_imie = '$zimie', 
wlasciciel_nazwisko = '$xnazwisko', 
tel = '$xtelefon', 
NIP = '$xnip', 
opis = '$xopis',
strona = '$xlink',
logo_link = '$xlogo' WHERE id = $numer";

$result = $link->query($sql);
echo '<script type="text/javascript">
window.location = "informacja.php?info=2";
</script>';
}


?>

<?PHP
include('footer.php');
?>