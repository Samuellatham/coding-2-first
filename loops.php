
<?php
include 'includes/header.php';
?>
<body>
    <?php
  //Loops
  //WHile
  $x = 1;
  while($x <= 5){
    echo "howdy<br>";
    $x++;
}

  //Do while
$x = 1;
do{
    echo "howdy<br>";
    $x++;
}
while($x <= 5);
    //FOR
  

  for($x = 0; $x <= 10; $x++){
echo "hola<br>";
  }
  //foreach
  $array = array("Jacob","jonas","Austin","Caleb","Harrison","Logan","Jackson","Ryan",);
  foreach($array as $loopdata){
echo "$loopdata is fast<br>";
  }
    ?>
</body>
</html>