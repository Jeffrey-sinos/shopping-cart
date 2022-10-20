<?php


  
  require('conn.php');

  
  $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."'";


  $rs = mysqli_query($db, $sql);

  ?>


<html>
<body>

  <h1 class="fish"> Welcome!</h1>
  <p> Here are your details:</p>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styling.css">

  <table width='80%' border=2>
    <tr bgcolor='#DDCBCB'>
      <td>Usertype</td>
      <td>First Name</td>
      <td>Surname</td>
      <td>Username</td>
      <td>Email</td>
      <td>Contact</td>
      <td>Address</td>
      <td>Password</td>
      

    </tr>



 <?php 
  while($row = mysqli_fetch_array($rs)) {

      echo "<tr>";
      echo "<td>".$row['usertype']."</td>";
      echo "<td>".$row['fName']."</td>";
      echo "<td>".$row['lName']."</td>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['phone']."</td>";
      echo "<td>".$row['address']."</td>";
       echo "<td>".$row['password']."</td>";

  }



  ?>

 </table>

 <style>
 body{
   background-image: url("uploads/food pattern.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-attachment: fixed;
 }
</style>

 
</body>
  </html>