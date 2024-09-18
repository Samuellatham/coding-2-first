
<?php
include 'includes/header.php';
?>
<body>
    <?php
    $x = 36;

    function BigMath($x){
       $newnr = $x / 42;
echo "this is the towns growth rate: ".$newnr;
    }
    
    BigMath($x);
    ?>
</body>
</html>