<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="Register.css">
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
		      	<h2>Register</h2>
                <form action="register_config.php" method="post">
                    <input type="hidden" name="type" value="create">
                    <ul>

		      		<li><input type="text" placeholder="Create username" name="username" required></li>
		      		<li><input type="text" placeholder="Enter email" name="email" required></li>
		      		<li><input type="text" placeholder="Create password" name="password" required></li>
		      	</ul>
                <input type="submit" value="Register">

	      	</div>
	      	<div class="Login">
	      	  <nav>
		        <a href="Login.php">login</a>
		      </nav>
		    </div>
	      </div>
	    </div>
	</header>

	


</body>
</html>