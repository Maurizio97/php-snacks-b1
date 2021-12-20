<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 5</title>
</head>
<body>
    <!-- ## Snack 5

    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
     -->
     <?php
        $p = "La droga e la dipendenza da questa è uno dei problemi che affliggono adolescenti e non solo. Spesso i giovani ne fanno uso senza pensare alle conseguenze. Si tratta infatti di sostanze che, oltre a creare dipendenze fisiche e psicologiche difficili da superare, possono provocare danni irreversibili al cervello. Ed allora costantemente ci si interroga sulle cause che spingono i giovani ad iniziare a far uso di queste sostanze. E' anche vero, però, che alcune sostanze che creano assuefazione sono accettate dalla società. Basta pensare al tabacco, all'alcol o agli psicofarmaci. Secondo gli esperti, solo una approfondita conoscenza delle droghe e degli effetti che possono avere sull'organismo può essere utile per la prevenzione e per spingere i giovani a non utilizzarle.";

        $arrP = explode(".", $p);
        var_dump($arrP);

     
     ?>
</body>
</html>