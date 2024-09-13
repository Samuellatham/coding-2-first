<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  //Loops
  //WHile
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