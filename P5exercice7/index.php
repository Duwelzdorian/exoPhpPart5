<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $department = [
            '59' => 'Nord',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
            '02' => 'Aisne',
            '60' => 'Oise'];
        $department['51'] = 'Marne';
        foreach($department as $departmentNumber=>$departmentName){
            ?>
        <p><?= $departmentNumber.' - '.$departmentName ?></p>
        <?php
        }
        ?>
    </body>
</html>