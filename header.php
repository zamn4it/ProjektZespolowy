<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Zarzadzanie">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap.css">
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
		<a href="index.php">Menu Główne</a> || <a href="admin.php">Admin</a>
		<?php
		session_start();
		if(isset($_SESSION['username'])){ echo ' || <a href="logout.php">Wyloguj</a>';}
		?>
		<br><br><form action="search.php" method="post"><input type="text"  class="textbox" name="szukajka"/><input type="submit"  name="submit" value="Szukaj"/></form>
		</td>
	</tr>
</table>