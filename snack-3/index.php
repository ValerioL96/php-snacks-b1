<?php

//Snack 3
//Creare un array di array. 
//Ogni array figlio avrà come chiave una data in questo formato:
//DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


//Stampare ogni data con i relativi post.
?>


    <?php 
        foreach($posts as $date => $datepost){?>

        <h2>
            data: <?php echo $date; ?>
        </h2>

        <ul>
        <?php foreach($datepost as $post){?>
            <li>
                <?php echo $post['title'];?>-<?php echo $post['author'];?>-<?php echo $post['text'];?>
            </li>
        <?php }?>
        </ul>
    <?php }?>
