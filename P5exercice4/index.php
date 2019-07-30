<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $month[7] = 'Août';
        ?>
        <p><?= $month[7]; ?></p>
    </body>
</html>