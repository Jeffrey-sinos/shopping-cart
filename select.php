<?php
include_once('conn.php');

$result = mysqli_query($db,"SELECT * FROM users ORDER BY id ASC");
?>

<html>
<head>
	<h1 class="fish"> User information</h1>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styling.css">
</head>

<body>
	<table width='80%' border=2>
		<tr bgcolor='#CCCCCC'>
			<td>Usertype</td>
			<td>First Name</td>
			<td>Surname</td>
			<td>Username</td>
			<td>Email</td>
			<td>Contact</td>
			<td>Address</td>
			<td>Password</td>
			<td>Update</td>

		</tr>

		<?php

		while($res = mysqli_fetch_array($result))  {
			echo "<tr>";
			echo "<td>".$res['usertype']."</td>";
			echo "<td>".$res['fName']."</td>";
			echo "<td>".$res['lName']."</td>";
			echo "<td>".$res['username']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['phone']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td>".$res['password']."</td>";
			echo "<td><a href=\"modify.php?id=$res[id]\">Modify</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

		}
    
    ?>

	</table>

</body>

</html>
