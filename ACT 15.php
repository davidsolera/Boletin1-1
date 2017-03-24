<?php
$i= rand(1,50);
$z=2;
$y=0;

while($z<=$i){
	if($i%$z==0){
	$y++;
	}	
$z++;	
}
if($y==1 || $i==1){
echo"el $i es primo";
}
else{
echo"el $i no es primo";
}
?>