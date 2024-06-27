<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="bg-grey">
        <ul>
            <?php foreach($db["teachers"] as $teacher){?>
                <li>
                    <?php echo $teacher['name'];?>  <?php echo $teacher['lastname'];?>
                </li>
            <?php }?>
        </ul>
    </div>
    <div class="bg-green">
        <ul>
            <?php foreach($db["pm"] as $pm ){?>
                <li>
                    <?php echo $pm['name'];?>  <?php echo $pm['lastname'];?>
                </li>
            <?php }?>
        </ul>
    </div>
</body>
</html>