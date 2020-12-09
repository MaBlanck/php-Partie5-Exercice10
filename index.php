<?php $departments = array(
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
);?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 10 Partie 5</title>
</head>
<body>
    <h1>Exercice 10 Partie 5</h1>
    <ul>
    <?php foreach($departments as $key => $value): ?>
    <li><?= 'Le département ' . $value . ' a le numéro ' . $key; ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>