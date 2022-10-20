<?php 
session_start();

$usertype="";
$fName="";
$lName="";
$username="";
$email="";
$phone="";
$address="";
$password="";

$userID="";
$paymenttype="";
$address="";

$foodName="";
$description="";


$errors = array();
$_SESSION['success'] = "";

$db = mysqli_connect('localhost','root','','shoppingcart');

if(isset($_POST['reg_user'])) {
  
  $usertype = mysqli_escape_string($db,$_POST['usertype']);
  $fName = mysqli_escape_string($db,$_POST['fName']);
  $lName = mysqli_escape_string($db,$_POST['lName']);
  $username = mysqli_escape_string($db,$_POST['username']);
  $email = mysqli_escape_string($db,$_POST['email']);
  $phone = mysqli_escape_string($db,$_POST['phone']);
  $address = mysqli_escape_string($db,$_POST['address']);
  $password = mysqli_escape_string($db,$_POST['password']);
  $psw = mysqli_escape_string($db,$_POST['psw']);



  
  if (empty($usertype)) {array_push($errors,"usertype is required"); }
  if (empty($fName)) { array_push($errors,"first name is required"); }
  if(empty($lName)) {  array_push($errors, "last name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if(empty($phone)) { array_push($errors, "Mobile no is required");}
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
 

  if ($password!= $psw) {
  array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE id='$id' OR username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

   if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }
  
  if(count($errors) == 0) {
    $query = "INSERT INTO users(usertype,fName,lName,username,email,phone,address,password) VALUES('$usertype',
    '$fName','$lName','$username','$email','$phone','$address','$password')";
      mysqli_query($db, $query);
    $_SESSION['usertype'] = $usertype;
    $_SESSION['fName'] = $fName;
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: dashboard.php');
  }

}

if (isset($_POST['login_user'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      
      $_SESSION['id'] = $id;
     
     

      $_SESSION['success'] = "You are now logged in";
      header('location: dashboard.php');
    }else {
      echo "Wrong  username and password";
      
    }
  }
}

if(isset($_POST['placeorder'])){
  
  $userID = mysqli_escape_string($db, $_POST['userID']);
  $address= mysqli_escape_string($db, $_POST['address']);
  $paymenttype= mysqli_escape_string($db,$_POST['paymenttype']);
  $Total = mysqli_escape_string($db, $_POST['Total']);
  $balance = mysqli_escape_string($db, $_POST['balance']);

 
 
 

   $query = "INSERT INTO orders(userID,address,paymenttype,Total) VALUES('$userID','$address', '$paymenttype', '$Total')";
   mysqli_query($db,$query);

   

   $sql ="UPDATE wallet SET balance='$amount' WHERE  userID=$userID";
   mysqli_query($db,$sql);

   header('location: homepage.html');
 


}








?>
