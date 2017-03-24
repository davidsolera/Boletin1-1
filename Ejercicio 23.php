<?php
echo "<u><b>Secuencia de Fibonacci</b></u>:<br>";
echo "<br>";
for($i=20; $i<=20; $i++){
    $variable=1;
    $variable1=1;
    echo "$variable1, ";
    for($h=2; $h<=$i; $h++){
        echo "$variable1, ";
        $variable1 = $variable + $variable1;
        $variable = $variable1 - $variable;
    }
}
?>

