<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="Login.css">
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
		      	<h2>Login</h2>
                <form action="login_config.php" method="post">
                    <input type="hidden" name="type" value="create">
		      	<input type="email" placeholder="Enter email" name="email">
		      	<input type="password" placeholder="Enter Password" name="password">
                <input type="submit" value="Login">

	      	</div>
	      	<div class="Register">
	      	  <nav>
		        <a href="Register.php">Register</a>
		      </nav>
		    </div>
	      </div>
	    </div>
	</header>



</body>
</html>