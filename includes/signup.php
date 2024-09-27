<?php
  
include_once 'includes/connection.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pass = $_POST['pwd'];

$sql = "INSERT into contact(user_first, user_last, user_email, user_id, user_pwd) values ('$first','$last','$email','$uid','$pass');";
 mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
    ?>