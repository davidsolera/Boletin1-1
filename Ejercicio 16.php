<?php
echo "<i><b>Secuencia de Fibonacci</b></i>:<br>";
echo "<br>";
$variable = 20;
while($variable<=20){
    $variable1 = 1;
    $variable2 = 1;
    echo "$variable1, ";
    $variable3 = 2;
    while($variable3<=$variable){
        echo "$variable2, ";
        $variable2 = $variable1 + $variable2;
        $variable1 = $variable2 - $variable1;
        $variable3++;
    }
   
   $variable++;
}
?>

