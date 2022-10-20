<?php
include_once('conn.php');

$result = mysqli_query($db,"SELECT * FROM menu ORDER BY id ASC");
?>

<html>
<head>
	<h1 class="fish"> Food information</h1>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styling.css">

</head>

<body>

		
	<table width='60%' border=2>

		
		<tr bgcolor='#DECCAC'>
		
			
			<td>Food Name</td>
			<td>Description</td>
			<td>Price</td>
			<td>RRP</td>
			<td>Quantity</td>
			<td>Update</td>
			
			

		</tr>

		<?php

		while($res = mysqli_fetch_array($result))  {
			echo "<tr>";
			
			echo "<td>".$res['foodName']."</td>";
			echo "<td>".$res['description']."</td>";
			echo "<td>".$res['price']."</td>";
			echo "<td>".$res['rrp']."</td>";
			echo "<td>".$res['quantity']."</td>";
			
			echo "<td><a href=\"file.php?id=$res[id]\">Add</a> | <a href=\"change.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to edit?')\">Change</a> | <a href=\"remove.php?id=$res[id]\">Remove</a></td>";

		}
    
    ?>

	</table>



</body>

</html>