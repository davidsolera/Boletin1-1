<?php
$nota = mt_rand(0,10);
echo "$nota :<br>";
echo"<br>";
switch($nota){
    
    case $nota<5; case 0:
        echo "Suspenso.";
        break;
    
    case 5:
        echo "Aprobado.";
        break;
    
    case 6:
        echo "Bien.";
        break;
    
    case 8; case 7:
        echo "Notable.";
        break;
    
    case $nota>8:
        echo "Sobresaliente.";
        break;
    
    default:
        echo "No hay nota.";
}
?>

