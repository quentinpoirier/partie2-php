<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <h1>exercice3</h1>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeure</li>
        <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>

    <?php

    $age = 26;
    $gender = "femme";

    if ($gender == "homme" && $age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($gender == "homme" && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($gender == "femme" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } else if ($gender == "femme" && $age < 18) {
        echo "Vous êtes une femme et vous êtes mineur";
    }

    ?>

    
</body>
</html>