<?php
//Snack 1
//Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.

$matches=[
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
[
    "hometeam"=>"Acerrana",
    "outteam"=>"Afragolana",
    "homepoints"=>"10",
    "outpoints"=>"2",
],
[
    "hometeam"=>"Barillo",
    "outteam"=>"Dolana",
    "homepoints"=>"0",
    "outpoints"=>"4",
],
[
    "hometeam"=>"Fortino",
    "outteam"=>"Perderello",
    "homepoints"=>"2",
    "outpoints"=>"8",
],
[
    "hometeam"=>"Atim",
    "outteam"=>"Sfonre",
    "homepoints"=>"5",
    "outpoints"=>"5",
],
];

?>


<ul>
    <?php 
    //Stampiamo a schermo tutte le partite con questo schema:
    //Olimpia Milano - Cantù | 55-60
        foreach($matches as $match){?>
        <li>
            
            <?php echo $match['hometeam'];?> - <?php echo $match['outteam'];?> | <?php echo $match['homepoints'];?>
            - <?php echo $match['outpoints'];?>
        </li>
        <?php }?>
</ul>