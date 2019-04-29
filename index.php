<?PHP
include('config.php');
include('header.php');
$sql = "SELECT id, nazwa, wlasciciel_imie, wlasciciel_nazwisko, opis, NIP, logo_link, strona, tel FROM firmy ORDER BY nazwa";
$result = $link->query($sql);


echo '
<center>
<table width="1500"><tr><td>
<table class="blueTable">
<thead>
<tr>
';
if(isset($_SESSION['username'])){ echo '<th>Admin</th>'; }
echo '
<th>Logo</th>
<th>Nazwa</th>
<th>Właściciel</th>
<th>NIP</th>
<th>Strona</th>
<th>Opis</th>
<th>Kontakt</th>
</tr></thead><tbody>';



while($row1 = $result->fetch_assoc()) {
echo '
<tr>
';
if(isset($_SESSION['username'])){ echo '<td>
<a href="firma_edit.php?numer='. $row1["id"].'"><img width="32" src="images/edit.png"></a>
<a href="firma_del.php?numer='. $row1["id"].'"><img width="32" src="images/delete.png"></a>
</td>'; }
echo '
<td><img width="100" src="'.$row1["logo_link"].'"></td>
<td>'.$row1["nazwa"].'</td>
<td>'.$row1["wlasciciel_imie"].' '.$row1["wlasciciel_nazwisko"].'</td>
<td>'.$row1["NIP"].'</td>
<td><a href="'.$row1["strona"].'" target="blank"><font color="blue">'.$row1["strona"].'</blue></a></td>
<td>'.$row1["opis"].'</td>
<td>'.$row1["tel"].'</td>
</tr>
';
}


echo '
</tbody>
</table>
</center>
';



include('footer.php');
?>