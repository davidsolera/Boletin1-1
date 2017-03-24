<?php
$variable = rand(0,50);
$variable1 = 0;
for($i=1; $i<($variable+1); $i++){
    if($variable%$i==0){
        $variable1++;
    }
}
if($variable1!=2){
    echo "El número $variable no es primo.";
}
else{
    echo "El número $variable es primo.";
}
?>

