<?php include('conn.php') ?>

<html>
<head>
<title>dashboard</title>


<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styling.css">


<h1 class="here"> Welcome to the User Dashboard!</h1>
<h2> Select the user you are logging in as</h2>
</head>

<body>
	<form method="post" action="Admin.php">
	<input type="submit" value="Admin" name="admin">
	</form>


    <form action="delivery.php">
    <input type="submit" value="Delivery">
    </form>

    <form action="customer.php">
    <input type="submit" value="Customer">
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