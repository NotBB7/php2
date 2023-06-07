<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP2</title>
</head>
<body>

<p>Exercice 1</p>

<?php
$age = 20; // Remplacez la valeur ici par l'âge souhaité

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
?>

<p>Exercice 2</p>

<?php
$isEasy = true; // ou false, selon votre choix

if ($isEasy) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile !!!";
}
?>
    
</body>
</html>