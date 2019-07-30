<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        for ($i = 0; $i <= 11; $i++) {
            ?>

            <p><?= $month[$i]; ?></p>
            <?php
        }
        ?>
    </body>
</html>