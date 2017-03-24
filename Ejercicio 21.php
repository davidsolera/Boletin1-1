<?php
$variable = mt_rand(1,50);
echo "Los números divisibles de <b>$variable</b> son :<br>";
echo "<br>";
for($i=1; $i<=$variable; $i++){
    if($variable%$i==0){
        echo "$i, ";
    }
}
?>

