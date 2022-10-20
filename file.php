<?php include('conn.php');?>

<html>
	<link rel="stylesheet" href="style.css">
	<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">

<label for="foodName"><b>Name:</b></label><br>
<input type="text" id="foodName" name="foodName" placeholder="Enter Name" value="<?php echo $foodName;?>"required><br>

<label for="description"><b>Description:</b></label><br>
<input type="text" id="description" name="description" placeholder="Enter description" value="<?php echo $description;?>"required><br>
<label for="price"><b>Price:</b></label><br>
<input type="number" id="price" name="price" placeholder="Enter food price" value="<?php echo $price;?>" required ><br>

<label for="rrp"><b>RRP:</b></label><br>
<input type="number" id="rrp" name="rrp" placeholder="Enter food price" value="<?php echo $rrp;?>" required ><br>


<label for="quantity"><b>quantity:</b></label><br>
<input type="number" id="quantity" name="quantity" placeholder="Enter quantity" value="<?php echo $quantity;?>"required><br>

	Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    
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