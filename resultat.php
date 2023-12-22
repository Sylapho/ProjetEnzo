<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Quiz</title>
    <style>
        .correct { color: green; }
        .incorrect { color: red; }
    </style>
</head>
<body>

    <h1>Résultats du Quiz</h1>

    <?php
    // Questions et réponses correctes
    $questions = array(
        "Qui est le dernier gagnant de la Ligue Française de League of Legends ?" => "KarmineCorp",
        "Quel âge a Vatira, la star de l'équipe rocket league de la Karmine Corp actuellement ?" => "17ans",
        "Quelle équipe a cédé son slot LEC à BDS en 2021 ?" => "Schalke04",
        "Quelle équipe a entrainé YamatoCannon de 2020 jusqu'en 2022 en LEC ?" => "Fnatic",
        "Quel joueur français connu pour son aim hors du commun, s'étant fait repéré sur CSGO, a fait sa transition sur Valorant en 2020 ?" => "Scream",
        "Qui a gagné les championnats du monde de Rocket League en 2022 ?" => "BDS",
        "Qui a remporté la première édition des VCT Game Changers, la compétition féminine de Valorant en 2023 ?" => "BBLQueens",
        "Quel joueur américain de Rocket League a donné son nom à une action dans le jeu (Un Reset) ?" => "Arsenal",
        "Quelle équipe a réalisé le split parfait (18 victoires pour 0 défaite) lors du Summer Split 2015 des EU LCS (Ancien nom désignant le LEC)" => "Fnatic"
        
    );

    // Vérifiez les réponses et calculez le score
    $score = 0;

    foreach ($questions as $question => $correctAnswer) {
        $userAnswer = isset($_POST[$question]) ? $_POST[$question] : '';

        echo "<p class=\"";
        if ($userAnswer === $correctAnswer) {
            echo "correct";
            $score++;
        } else {
            echo "incorrect";
        }
        echo "\">Question: $question<br> Votre réponse: $userAnswer <br> Réponse correcte: $correctAnswer</p>";
    }

    // Affichez le score et un message personnalisé
    echo "<p>Votre score est de $score sur " . count($questions) . ".</p>";

    if ($score == count($questions)) {
        echo "<p>Félicitations! Vous avez répondu correctement à toutes les questions.</p>";
    } elseif ($score >= count($questions) / 2) {
        echo "<p>Bravo! Vous avez bien répondu à la plupart des questions.</p>";
    } else {
        echo "<p>Vous pouvez faire mieux. Continuez à vous entraîner!</p>";
    }
    ?>

</body>
</html>
