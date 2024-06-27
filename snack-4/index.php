<?php

//Snack 4
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $randomNumber = [];
    while(count($randomNumber) < 15 ){
        $newRandomNumber =rand(1,50);

        if(!in_array( $newRandomNumber, $randomNumber)){
            $randomNumber[]=$newRandomNumber;
        }
    }

?>

<ul>
<?php foreach($randomNumber as $number){ ?>

    <li>
        <?php echo $number;?>
    </li>

<?php } ?>    
</ul>

