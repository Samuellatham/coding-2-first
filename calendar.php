
<?php
include 'includes/header.php';
?>
<body>
    <?php
$dayofweek = date("w");

switch ($dayofweek){
    case 1:
        echo "<p>It is monday</p>";
        break;
    case 2:
        echo "<p>It is tuesday</p>";
         break;
    case 3:
         echo "<p>It is wednesday</p>";
        break;
    case 4:
        echo "<p>It is Thursday</p>";
        break;
    case 5:
        echo "<p>It is Friday</p>";
        break;
    case 6:
        echo "<p>It is Saturday</p>";
        break;
    case 0:
        echo "<p>It is Sunday</p>";
        break;
}
    ?>
</body>
</html>