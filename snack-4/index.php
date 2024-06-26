<?php

//Snack 4
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
for($i= 0; $i< 15; $i++){
    $randomNumber = rand(1,50);
    while($randomNumber != $randomNumber){
        $randomNumber =rand(1,50);
    }
}
?>

<ul>
<li> <?php  echo $randomNumber; ?></li>
</ul>

