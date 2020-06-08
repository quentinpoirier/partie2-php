<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
    <h1>exercice5</h1>
    <p>Traduire ce code avec des if et des else : </p>

    <?php

    $gender = 'autre';

    if ($gender != 'homme') {
        echo 'C\'est une développeuse !!!';
    } else if ($gender == 'homme') {
        echo 'C\'est un développeur !!!';
    }

    ?>

    
</body>
</html>