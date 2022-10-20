


<?php

include('conn.php');



?>

<form method="post" action="checkout.php">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="styling.css">

<label for="userID"><b>User ID:</b></label><br>
<input type="text" id="userID" name="userID" value="<?php echo $userID;?>"><br>
<label for="address"><b>Address:</b></label><br>
<input type="text" id="address" name="address" value="<?php echo $address;?>"><br>
<label for="paymenttype"><b>Payment Type:</b></label><br>
<input type="text" id="paymenttype" name="paymenttype" value="<?php echo $paymenttype;?>"><br>
<label for="Total"><b>Total:</b></label><br>
<input type="number" id="Total" name="Total" value="<?=$Total;?>"><br><br>

<input type="submit" name="placeorder" value=" Place order">


