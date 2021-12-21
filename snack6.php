<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
    <style>
        #grey {
            background-color: grey;
        }

        #green {
            background-color: green;
        }
    </style>
</head>
<body>
    <!-- ## Snack 6

    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. 
    -->
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
        $rectangleGrey = [];
        $rectagleGreen = [];
        // $arrayKeys = array_keys($db);
        // for ($i=0; $i < count($arrayKeys); $i++) { 
        //     for ($x=0; $x < count($db[$arrayKeys[$i]]) ; $x++) { 
        //         if ($arrayKeys[$i] === 'teachers') {
        //             echo "<div id='grey'>". $db[$arrayKeys[$i]][$x]['name']. "<br>" . $db[$arrayKeys[$i]][$x]['lastname']. "<br>" . "</div>";
        //         } else {
        //             echo "<div id='green'>". $db[$arrayKeys[$i]][$x]['name']. "<br>" . $db[$arrayKeys[$i]][$x]['lastname']. "<br>" . "</div>";
        //         }
        //     }
        // }

        // es live
        foreach ($db as $key => $category) {
            foreach ($category as $person) {
                if ($key === 'teachers') {
                    echo "<div id='grey'>". $person['name']. "<br>" . $person['lastname']. "<br>" . "</div>";
                } else {
                    echo "<div id='green'>". $person['name']. "<br>" . $person['lastname']. "<br>" . "</div>";
                }
            }
        }
    ?>
</body>
</html>