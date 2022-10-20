<?php include('conn.php');


$foodName="";
$description="";
$price="";
$rrp="";
$quantity="";

$statusMsg = '';

$targetDir = "img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    
    
    $foodName = mysqli_escape_string($db,$_POST['foodName']);
    $description = mysqli_escape_string($db,$_POST['description']);
    $price = mysqli_escape_string($db,$_POST['price']);
    $rrp = mysqli_escape_string($db,$_POST['rrp']);
    $quantity = mysqli_escape_string($db,$_POST['quantity']);
    
    
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
          
            $insert = $db->query("INSERT into menu (foodName,description,price,rrp,quantity,img,date_added) VALUES ('$foodName', '$description','$price','$rrp','$quantity','".$fileName."',NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}



echo $statusMsg;

?>
