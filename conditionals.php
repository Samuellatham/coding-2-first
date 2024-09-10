<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        $x = 1;
        if ($x == 1){echo "big pharma bad";} 
        elseif ($x == 2 ){
            echo "IRS is bad";
        }
        elseif ($x == 3 ){
            echo "giving all the money to ukraine is bad";
        }
        elseif ($x == 4 ){
            echo "killing middle class is bad";
        }
        else {
            echo "big government bad";
        }


     ?>

     <?php
$x = "2";

switch ($x){
    case 1:
        echo "pennsylvania cheated in 2020 election!";
        break;
    case 2:
        echo "pennsylvania REALLY cheated in 2020 election!";
        break;
        default:
        echo "Reality is fake";
}

     ?>
</body>
</html>