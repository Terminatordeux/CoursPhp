<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $variable = 5;
    echo $variable;
    echo '<br/>';
    echo gettype($variable);
    echo '<br/>';
    $monPrenom = "Vincent";
    echo "mon Prénom {$monPrenom}<br>";
    $boubool = true;
    echo gettype($boubool);
    echo '<br/>';    
    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo $total;
    
    ?>
    
</body>
</html>