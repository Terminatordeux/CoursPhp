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
    $x = 12;
    $y = 10;
    $total = $x + $y;
    echo "mon resultat de $x + $y est egal à $total";
    echo '<br/>';
    
//$a=0;
//$b=0;
//$c=0;
    //function ttc($ht,$qtx,$tva)
   // {
   //     $ttc = $ht*$qtx+($ht*$qtx*$tva/100);
   //     $a = $ht;
   //     $b = $qtx;
   //     $c = $tva;
   //     
//}
    
  //  echo "l/'article vaud $a, nous en avons un quantité de $b, auquel s'applique un tx de TVA de $c ce qui nous donne un prix TTC de ";
  //  echo ttc(10,10,5.5);

    // function tester($num)
    // {
    //     if ($num<=0){
    //         if ($num==0){
    //             echo "le chiffre est nul ";
    //         }
    //         else{
    //         echo "le chiffre est négatif";
    //         }
    //     }
    //     else
    //     {
    //         echo "le chiffre est positif";
    //     }
    // }
    // return tester(0);

    function gamin($ageenfant)
    {
        switch ($ageenfant) {
            case $ageenfant >=6 and $ageenfant<=7:
            echo "Poussin";
            break;
            case $ageenfant >=8 and  $ageenfant<=9:
                echo "Pupille";
            break;
            case $ageenfant >=10 and  $ageenfant<=11:
                echo "Minime";
            break;
            case $ageenfant >12:
                echo "Cadet";
            break;

        }
        
    }
   echo gamin(5);

   for ($i = 1; $i <= 5; $i++) {
    echo $i, '<br/>';
}

    
    ?>
    
</body>
</html>
