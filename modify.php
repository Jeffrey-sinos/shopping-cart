<?php 

include_once('conn.php');

if(isset($_POST['update'])){
	$id = mysqli_real_escape_string($db,$_POST['id']);

	$usertype = mysqli_real_escape_string($db,$_POST['usertype']);
	$fName = mysqli_real_escape_string($db,$_POST['fName']);
	$lName = mysqli_real_escape_string($db,$_POST['lName']);
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$phone = mysqli_real_escape_string($db,$_POST['phone']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$password = mysqli_real_escape_string($db,$_POST['password']);


	if(empty($usertype) || empty($fName) || empty($lName) || empty($username) || empty($email) || empty($phone) || empty($address) || empty($password)) {
		if(empty($usertype)){
			echo "<font color='red'>Usertype field is empty.</font><br/>";
		}
		if(empty($fName)){
			echo "<font color='red'>first Name field is empty.</font><br/>";
		}
		if(empty($lName)){
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		if(empty($username)){
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		if(empty($email)){
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($phone)){
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}
		if(empty($address)){
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		if(empty($password)){
			echo "<font color='red'>Address field is empty.</font><br/>";
		}


	} else{
		$result = mysqli_query($db,"UPDATE users SET usertype='$usertype',fName='$fName',lName='$lName',username='$username',email='$email',phone='$phone',address='$address', password= '$password' WHERE id=$id");

		header('Location: select.php');
	}


}
?>

<?php

$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result)){
	$usertype = $res['usertype'];
	$fName = $res['fName'];
	$lName = $res['lName'];
	$username = $res['username'];
	$email = $res['email'];
	$phone = $res['phone'];
	$address = $res['address'];
	$password = $res['password'];

}
?>

<html>
	<head>
		<h1 class="fish"> Update data</h1>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styling.css">

	</head>

<body>
  <form method="post" action="modify.php">
    <table border=2>
        <tr>
        	<td>Usertype</td>
        	<td><input type="text" name="usertype" value="<?php echo $usertype;?>"></td>
        </tr>
        <tr>
        	<td>First Name</td>
        	<td><input type="text" name="fName" value="<?php echo $fName;?>"></td>
        </tr>
        <tr>
        	<td>Surname</td>
        	<td><input type="text" name="lName" value="<?php echo $lName;?>"></td>
        </tr>
        <tr>
        	<td>Username</td>
        	<td><input type="text" name="username" value="<?php echo $username;?>"></td>
        </tr>
        <tr>
        	<td>Email</td>
        	<td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
        	<td>Contact</td>
        	<td><input type="number" name="phone" value="<?php echo $phone;?>"></td>
        </tr>
        <tr>
        	<td>Address</td>
        	<td><input type="text" name="address" value="<?php echo $address;?>"></td>
        </tr>

          <tr>
        	<td>Password</td>
        	<td><input type="password" name="password" value="<?php echo $password;?>"></td>
        </tr>


        <tr>
        	
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
        </tr>



    </table>	

</body>


</html>