<?php

require 'config.php';
$sql = "SELECT * FROM gokkerscontext";
$query = $db->query($sql);
$contacts = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="Main.css">
</head>
<body>
	<header>
		<div class="container">
	      <div class="banner">
	      	<div class="Home">
		        <a href="Main.php">Home</a>
		    </div>
		    <div class="Titel">
		      	<h1>Gokkers</h1>
	      	</div>
	      	<div class="Login">
	      	  <nav>
		        <a href="Register.php">register</a>
		        <a href="Login.php">login</a>
		      </nav>
		    </div>
	      </div>
	    </div>
	</header>

	<main>
		<img src="IMG/Gokkers.PNG">
	</main>

	<footer>
		<div class="footer">
			<h2>Copy Right By Jordi & Robin</h2>
		</div>
	</footer>


</body>
</html>