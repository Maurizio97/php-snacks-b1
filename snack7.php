<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 7</title>
    <style>
        div {
            margin: 10px;
        }
    </style>
</head>
<body>
    <!-- ## Snack 7

    Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
    Good luck :party_parrot: 
    -->
    <?php
        $class = [
            [
                'name' => 'Michele',
                'surname' => ' Papagni',
                'votes' => [8,6,4,5,7,3]
            ],
    
            [
                'name' => 'Fabio',
                'surname' => 'Forghieri',
                'votes' => [5,4,4,4,5,4]
            ],

            [
                'name' => 'Roberto',
                'surname' => 'Marazzini',
                'votes' => [9,9,9,9,9.5,10]
            ],
        ];

        foreach($class as $student){
            $sumVote = 0;
            foreach ($student['votes'] as $vote) {
                $sumVote = $sumVote + $vote;
                
            }
            $averageVotes = $sumVote / count($student['votes']);
            echo '<div>' . $student['name'] . '<br>' . $student['surname'] . '<br>' . $averageVotes . '</div>';
        }
    ?>
    
</body>
</html>