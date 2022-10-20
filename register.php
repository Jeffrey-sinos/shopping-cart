<?php include('conn.php')?>
<html>
	
<title>Register</title>

<h1 class="here">Sign up page</h1>
<nav>
	<a href="index.php">Menu</a>
</nav>

<h2>Please enter your details here</h2>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styling.css">


<body>

<form method ="post" action="register.php" class="email"> 
	

<label for="usertype"><b>Usertype:</b></label><br>
<input type="text" id="usertype" name="usertype" placeholder="Which type of user?" value="<?php echo $usertype;?>"required><br>
<label for="fName"><b> First Name:</b></label><br>
<input type="text" id="fName" name="fName" placeholder="Enter name?" value="<?php echo $fName;?>"required><br>
<label for="lName"><b> Last Name:</b></label><br>
<input type="text" id="lName" name="lName" placeholder="Enter name?" value="<?php echo $lName;?>"required><br>
<label for="username"><b>Username:</b></label><br>
<input type="text" id="username" name="username" placeholder="Enter a username" value="<?php echo $username;?>" required><br>
<label for="email"><b>Email Address:</b></label><br>
<input type="text" id="email" name="email" placeholder="Enter your email address" value="<?php echo $email;?>" required><br>
<label for="phoneNo"><b>Mobile Number:</b></label><br>
<input type="number" id="phone" name="phone" placeholder="Enter your mobile number" value="<?php echo $phone;?>" required><br>
<label for="address"><b>Address:</b></label><br>
<input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $address;?>" required><br>
<label for="password"><b>Password:</b></label><br>
<input type="password" id="password" name="password" placeholder="Enter a password" value="<?php echo $password;?>"required><br>
<label for="psw"><b> Confirm Password:</b></label><br>
<input type="password" id="psw" name="psw" placeholder="Confirm the password above" required><br><br>

<input type="submit" value="Register" name="reg_user">

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

<footer>
	<p> Already signed up?Then login <a href="Login.php">here</p>
</footer>





</html>