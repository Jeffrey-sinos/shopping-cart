<?php include('conn.php')?>
<html>
	<html>
<head>
	<title>Login Page</title>
 
 <h1 class="fry">Login Page</h1>

 <nav> 
   <a href="index.php">Menu</a>
   
 </nav>

 <link rel="stylesheet" href="style.css">


</head>

<body>

 <article>
	<p>This is the login page</p>
	<p> First time here? Then sign up <a href="register.php">here</a></p>
  
</article>

 <form method="post" action="login.php">
  <link rel="stylesheet" href="styling.css">
 
 <label for="username" class="email"><b>Username:</b></label><br>
 <input type="text" id="username" placeholder="Enter username" name="username" required><br>
 <label for="password" class="password"><b>Password:</b></label><br>
 <input type="password" id="password" placeholder="Enter password" name="password" required><br><br>
 <input type="submit" value="Login" name="login_user">
 </form>



		

<style>
 body{
   background-image: url("img/restaurant.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-attachment: fixed;
 }
</style>



</body>

</html>