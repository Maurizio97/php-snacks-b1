<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    <!-- ## Snack 2

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
    <div>
        <?php
            $nameUser = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            if (strlen($nameUser) > 3 
                && is_numeric($age) 
                && strpos($mail, ".") 
                && strpos($mail, "@")){
                echo "accesso riuscito";
            } else {
                echo "accesso negato";
            }
        ?>
    </div>
</body>
</html>