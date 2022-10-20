<?php 
require('conn.php');

$sql = "SELECT * FROM orders ";

$rs = mysqli_query($db , $sql);

?>

<html>
<body>

  <h1 class="fish"> Welcome!</h1>
  <p> Here are the pending orders details:</p>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styling.css">

  <table width='80%' border=2>
    <tr bgcolor='#DDCBCB'>
      <td>UserID</td>
      <td>Address</td>
      <td>Payment Type</td>
      <td>Total</td>
      
      

    </tr>



 <?php 
  while($row = mysqli_fetch_array($rs)) {

      echo "<tr>";
      echo "<td>".$row['userID']."</td>";
      echo "<td>".$row['address']."</td>";
      echo "<td>".$row['paymenttype']."</td>";
      echo "<td>".$row['Total']."</td>";
 

  }



  ?>

 </table>



 
</body>