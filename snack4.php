<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>
    <!-- ## Snack 4

    Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    -->
    <?php
        $arrNum = [];
        for ($i=0; count($arrNum) < 15 ; $i++) { 
            $arrNum[] = rand(1, 100);
        }
        var_dump($arrNum);
    ?>
</body>
</html>