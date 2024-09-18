<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
include 'includes/header.php';
?>
<body>
   <?php  
   //Arithmetic operators
   echo 5+5  ;
   echo 5-2 ;
   echo 5/5 ;
   echo 5*5;
   echo 8%5;
   echo 5**5
   ?>

   <?php  
   //assignment operators
   $x = 100;
    $x = $x + 20;
    $x += 20;
   echo $x;
   ?>

<?php  
   //comparison operators
   $x = 5;
   $y = 10;

   if($x = $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x == $y){
    echo "True!";
   }
   else{
    echo "False!";
   }if($x === $y){
    echo "True!";
   }
   else{
    echo "False!";
   }if($x != $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x < $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x > $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x >= $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x <= $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x !== $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   if($x <> $y){
    echo "True!";
   }
   else{
    echo "False!";
   }
   ?>

<?php  
   //Increment/Decrement Operators
   $x = 10;
   echo ++$x;
   echo $x++;
   echo $x;
   echo --$x;
   echo $x--;
   echo $x;
   ?>

<?php  
   //Logical Operators
   $x = 10;
   $y = 20;
   if($x == $y or 1 == 1){
    echo "true.";
   }
   if($x == $y and 1 == 1){
    echo "true.";
   }
   if($x == $y || 1 == 1){
    echo "true.";
   }
   if($x == $y && 1 == 1){
    echo "true.";
   }
   if($x == $y xor 1 == 1){
    echo "true.";
   }
   ?>
</body>
</html>