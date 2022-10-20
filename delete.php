<?php

include("conn.php");


$id = $_GET['id'];


$result = mysqli_query($db, "DELETE FROM users WHERE id=$id");


header("Location:select.php");
?>