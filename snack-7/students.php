<?php

//Snack 7
//Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
//Questo array dovra' essere inserito in un file separato, da importare.
//Stampare Nome, Cognome e la media dei voti di ogni alunno.

include __DIR__ .'/votes';

$students = [
        [
            'name' => 'Michele',
            'lastname' => 'Palo',
            'votes'=> $votes,
        ],
        [
            'name' => 'Gioele',
            'lastname' => 'Pio',
            'votes'=> $votes,
        ],
        [
            'name' => 'Maria',
            'lastname' => 'Filippi',
            'votes'=> $votes,
        ],
        [
            'name' => 'Rosella',
            'lastname' => 'Diaz',
            'votes'=> $votes,
        ],
];
?>

<ul>
    <?php foreach($students as $student) {?>
        <li>
                    <?php echo $student['name'];?>  <?php echo $student['lastname'];?> <?php echo $student[$votes];?>
                </li>
            <?php }?>
</ul>