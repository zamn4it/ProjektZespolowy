<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Zarzadzanie">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Baza Firm</title>
</head>
<body>
<center>
<table>
	<tr>
		<td width="120" height="120" valign="top">
		<a href="index.php"><img src="images/logo.png" width="90"></a>
		</td>
		<td width="302" height="120" style="text-align:left;vertical-align:top;padding:0">
		<font color="white" size="4">Baza Firm
		</td>
		<td valign="top">
		<a href="index.php">Menu G³ówne</a> || <a href="admin.php">Admin</a> || <a href="excel_export.php">export</a>

		<?php
		session_start();
		if(isset($_SESSION['username'])){ echo ' || <a href="logout.php">Wyloguj</a>';}
		?>
		<br><br><form action="search.php" method="post"><input type="text"  class="textbox" name="szukajka"/><input type="submit"  name="submit" value="Szukaj"/></form>
		</td>
		<td valign="top">
		<font color="white"><?php
		include('functions.php');
		echo currentdate();
		?>
		</td>
	</tr>
</table>