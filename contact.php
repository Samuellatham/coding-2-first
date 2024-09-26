<?php
include 'includes/header.php';
include_once 'includes/connection.php'
?>
<body>
<form action="includes/connection.php" method="POST">
<input  type='text' name='first' placeholder='Firstname'>
<input  type='text' name='first' placeholder='lastname'>
<input  type='text' name='first' placeholder='E-mail'>
<input  type='text' name='first' placeholder='Username'>
<input  type='password' name='first' placeholder='Password'>
<button type="submit" name="submit">sign up</button>
</form>






    <?php

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pass = $_POST['pwd'];

$sql = "INSERT into contact(user_first, user_last, user_email, user_id, user_pwd) values ('$first','$last','$email','$uid','$pass');";
 mysqli_query($conn, $sql);


    ?>
</body>
</html>