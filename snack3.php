<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
    <style>
        div {
            margin : 10px;
            border : solid 1px black
        }
    </style>
</head>
<body>
    <!-- ## Snack 3

    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    -->
    <?php

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
    $arrayKeys = array_keys($posts);

    for ($i=0; $i < count($arrayKeys) ; $i++) { 
        // var_dump($posts[$arrayKeys[$i]]);
        for ($x=0; $x < count($posts[$arrayKeys[$i]]); $x++) { 
            echo "<div>" . $arrayKeys[$i] . "<br>" . $posts[$arrayKeys[$i]][$x]['title'] . "<br>" . $posts[$arrayKeys[$i]][$x]['author'] . "<br>" . $posts[$arrayKeys[$i]][$x]['text'] ."</div>";
        }
    }
    ?>
    <div>
        <?php
            
        ?>
    </div>
</body>
</html>