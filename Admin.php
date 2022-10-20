<html>
<head>
	<title>Admin Page</title>
	<h1 class="here"> Welcome to the Admin Page</h1>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styling.css">
</head>

<body>
	<article>
	<p> This is the administrator's page</p>
    </article>
  <form  method="post" action="select.php">
  	
  <input type="submit" value="View Users" name="view_user">
  
  
  </form>
	




  <form method="post" action="select.php">
     
  	<input type="submit" value="Edit information" name="edit_user">
  
  </form>
  


  <form method="post" action="addition.php">
  	<input type="submit" value="Add Food" name="add_food">
  </form>

  <form method="post" action="delivery.php">
    <input type="submit" value="View Orders" name="add_food">
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