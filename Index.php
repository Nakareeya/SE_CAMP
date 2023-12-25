<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylephp.css">
    
</head>

<body>
    <center>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div class="box">
    <?php
    $var_multiplier = 1;
    $var_number = 24;
    
    echo "สูตรคูณแม่ $var_multiplier <br>";
    for($i = 1 ; $i <= $var_number ; $i++){
        $var_result = $var_multiplier * $i;
        echo "$var_multiplier * $i = $var_result<br>";        
    }
    ?>
    </div>
    </center>
    
</body>

</html>