<?php include('conn.php');

$statusMsg = '';

$targetDir = "img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST['update'])){


        
  $id = mysqli_real_escape_string($db,$_POST['id']);
   

  $foodName = mysqli_real_escape_string($db,$_POST['foodName']);
  $description = mysqli_real_escape_string($db,$_POST['description']);
  $Price = mysqli_real_escape_string($db,$_POST['Price']);
  $rrp = mysqli_real_escape_string($db,$_POST['rrp']);
  $quantity = mysqli_real_escape_string($db,$_POST['quantity']);

    if( empty($foodName) || empty($description) || empty($Price) || empty($rrp) || empty($quantity)){
      
     
      if(empty($foodName)){
          echo "<font color='red'>image field is empty.</font><br/>";
      }

      if(empty($description)){
          echo "<font color='red'>image field is empty.</font><br/>";
      }
      if(empty($Price)){
          echo "<font color='red'>image field is empty.</font><br/>";
      }
      if(empty($rrp)){
        echo "<font color='red'>Price field is empty.</font><br/>";
      }
      if(empty($quantity)){
        echo "<font color='red'>Quantity field is empty.</font><br/>";
      }

    } else{
       

      $result = mysqli_query($db,"UPDATE menu SET  foodName='$foodName', description='$description',Price='$Price',rrp='$rrp', quantity='$quantity' WHERE  id=$id");

      header('Location: addition.php');


   $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){

      if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
         $insert = $db->query("UPDATE  menu SET img='".$fileName."',uploaded_on= NOW() WHERE id=$id");

         echo $statusMsg;

           }
        }
    }

}

?>

<?php 
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT foodName,description,Price,rrp,quantity FROM menu WHERE id=$id");

while($res = mysqli_fetch_array($result)){
   
   
  
   $foodName = $res['foodName'];
   $description = $res['description'];
   $Price = $res['Price'];
   $rrp = $res['rrp'];
   $quantity = $res['quantity'];

}
?>

<html>
  <head>
    <h1 class="fish">Update Data</h1>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styling.css">
  </head>
  <body>
  <form action="change.php" method="post" enctype="multipart/form-data">
     <table border=2>
      
         
        <tr>
          <td>Food Name</td>
          <td><input type="text" name="foodName" value="<?php echo $foodName;?>"></td>
        </tr>

        <tr>
          <td>Description</td>
          <td><input type="text" name="description" value="<?php echo $description;?>"></td>
        </tr>

        <tr>
          <td>Price</td>
          <td><input type="number" name="Price" value="<?php echo $Price;?>"></td>
        </tr>

        <tr>
          <td>rrp</td>
          <td><input type="number" name="rrp" value="<?php echo $rrp;?>"></td>
        <tr>
          <td>quantity</td>
          <td><input type="number" name="quantity" value="<?php echo $quantity;?>"></td>
        </tr>

        <tr>
          <td>Image</td>
         <td><input type="file" name="file">
   
        </tr>
    
        
  
        <tr>
          
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
        </tr>

    </table>  


  
  


</body>


</html>


