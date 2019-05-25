<?php
	include('functions.php');
	session_start();
?>
<html>
	<head>
		<title>Baza Firm</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Zarzadzanie" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	<div class="container">
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php"><img src="images/logo.png" style="width:36px; height:36px; margin-right:25px;"> Baza firm</a>
      
	  <form action="search.php" class="form-inline" method="post" role="form">
	  	<div class="form-group">
			<input class="form-control form-control-dark w-100 textbox" name="szukajka" type="text" placeholder="Search" aria-label="Search">
		</div>
		<div class="form-group">
			<input type="submit"  name="submit" class="search-button" value="Szukaj"/>
		</div>
      </form>
	  <?php		
			if(isset($_SESSION['username'])){ 
				echo '<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">';
				echo currentdate();
				echo '
				  <a class="nav-link" href="logout.php">Wyloguj</a>
				</li>
			  </ul>';
			} else {
				echo '<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">';
				echo currentdate();
				echo '
				  <a class="nav-link" href="login.php">Zaloguj</a>
				</li>
			  </ul>';
			}
	   ?>
    </nav>

      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="home"></span>
                  Strona Główna
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">
                  <span data-feather="file"></span>
                  Admin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="excel_export.php">
                  <span data-feather="shopping-cart"></span>
                  Export
                </a>
              </li>
            </ul>
        </nav>

		<main class="col-md-11 ml-sm-auto"  role="main">
			<div class="my-4 w-100">