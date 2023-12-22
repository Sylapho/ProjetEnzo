<?php
    /*
    Le tableau permet de stocker toutes les réponses aux questions.
    */
    $questions = array(
      "reponse1" => "KarmineCorp",
      "reponse2" => "17ans",
      "reponse3" => "Schalke04",
      "reponse4" => "Fnatic",
      "reponse5" => "Scream",
      "reponse6" => "BDS",
      "reponse7" => "BBLQueens",
      "reponse8" => "Arsenal",  
    );
    // On initialise les réponses en étant vide (Utile pour après)
    $reponse1 = null;
    $reponse2 = null;
    $reponse3 = null;
    $reponse4 = null;
    $reponse5 = null;
    $reponse6 = null;
    $reponse7 = null;
    $reponse8 = null;

    $score = 0; 
    // On vérifie si la personne a répondu à la question
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['q1'])){
          $reponse1 = $_POST['q1'];
        
          if ($reponse1 === $questions["reponse1"]) {
            // Si la réponse est bonne alors on ajoute un au score
              $score++;
          }
    }

    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q2'])){ 
        $reponse2 = $_POST['q2'];

        if ($reponse2 === $questions["reponse2"]) {
            // Si la réponse est bonne alors on ajoute un au score
            $score++;
        }
    }

     // On vérifie si la personne a répondu à la question
    if(isset($_POST['q3'])){
        $reponse3 = $_POST['q3'];

        if ($reponse3 === $questions["reponse3"]) {
            // Si la réponse est bonne alors on ajoute un au score
            $score++;
        }

    }

    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q4'])){
        
      $reponse4 = $_POST['q4'];

      if ($reponse4 === $questions["reponse4"]) {
        // Si la réponse est bonne alors on ajoute un au score
          $score++;
      }
    }

    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q5'])){
      $reponse5 = $_POST['q5'];

      if ($reponse5 === $questions["reponse5"]) {
        // Si la réponse est bonne alors on ajoute un au score
          $score++;
      }
    }

    
    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q6'])){
        $reponse6 = $_POST['q6'];

        if ($reponse6 === $questions["reponse6"]) {
            // Si la réponse est bonne alors on ajoute un au score
            $score++;
        }
 
    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q7'])){
        $reponse7 = $_POST['q7'];
      
        if ($reponse7 === $questions["reponse7"]) {
            // Si la réponse est bonne alors on ajoute un au score
            $score++;
        }
    }

    // On vérifie si la personne a répondu à la question
    if(isset($_POST['q8'])){
        $reponse8 = $_POST['q8'];
          
        if ($reponse8 === $questions["reponse8"]) {
            // Si la réponse est bonne alors on ajoute un au score
            $score++;
        }
    }
    }
  }

  // Le PHP est en haut car il n'affiche rien pour l'instant.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résultat du Quiz !</title>
  <link rel="stylesheet" href="./style/stylequiz.css">
</head>
<body>

<header>
        <div>
            <img src="./images/Logo_The_Reporter.png" alt="Logo The Reporter" width="10%" class="logo">
        </div>
        <div>
            <h1>E-SPORT ACTU'</h1>
       </div>
    </header>
    <nav>
      <ul>
        <li><a href="./index.html">Accueil</a></li>
        <li class="deroulant"><a href="#">Articles</a>
          <ul class="sous">
            <li><a href="./article1.html">KC League of Legends LEC 2024</a></li>
            <li><a href="./article2.html">KC Rocket League RLCS 2024</a></li>
            <li><a href="./article3.html">KC Valorant VCT 2024</a></li>
          </ul>
        </li>
        <li><a href="./petition.html">Pétition</a></li>
        <li><a href="./quiz.html">Quizz</a></li> 
        
      </ul>
</nav>

    <h1>Résultats du Quiz</h1>
    <p
    <?php 
    // Permet de choisir entre les 2 class (Vrai et faux) afin de choisir la couleur à afficher
        if ($reponse1 === $questions["reponse1"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 1 : Qui est le dernier gagnant de la Ligue Française de League of Legends ?</p> 
    <p
    <?php 
        if ($reponse2 === $questions["reponse2"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    } 
    ?>> Question 2 : Quel âge a Vatira, la star de l'équipe rocket league de la Karmine Corp actuellement ? ?</p> 
    <p
    <?php 
        if ($reponse3 === $questions["reponse3"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 3 : Quelle équipe a cédé son slot LEC à BDS en 2021 ?</p> 
    <p
    <?php 
        if ($reponse4 === $questions["reponse4"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 4 : Quelle équipe a entrainé YamatoCannon de 2020 jusqu'en 2022 en LEC ?</p> 
    <p
    <?php 
        if ($reponse5 === $questions["reponse5"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 5 : Quel joueur français connu pour son aim hors du commun, s'étant fait repéré sur CSGO, a fait sa transition sur Valorant en 2020 ?</p> 
    <p
    <?php 
        if ($reponse6 === $questions["reponse6"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 6 : Qui a gagné les championnats du monde de Rocket League en 2022 ?</p> 
    <p
    <?php 
        if ($reponse7 === $questions["reponse7"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
    }
    ?>> Question 7 : Qui a remporté la première édition des VCT Game Changers, la compétition féminine de Valorant en 2023 ?</p> 

    <p
    <?php 
        if ($reponse8 === $questions["reponse8"]){
            echo 'class="vrai"';
        } else {
            echo 'class="faux"';
        }
    ?>> Question 8 : Quel joueur américain de Rocket League a donné son nom à une action dans le jeu (Un Reset) ?</p> 
    <br>
    <p class="score"> Score : <?php echo $score; ?> </p> 
    <br>
    <!-- Permet d'afficher un message en fonction du score obtenu -->
    <p class="messagePersonnalise"><?php
        if($score === 0){
            echo "Aucune bonne réponse ! Vous êtes nul.";
        } elseif($score < 4 && $score > 0){
            echo "Aïe, vous avez presque la moyenne, dommage !"; 
        } elseif($score >= 4 && $score < 7){
            echo "C'est bieng !";
        } elseif($score === 7){
            echo "Vous y étiez presque, 1 seule erreur !";
        } elseif($score === 8){
            echo "Parfait, vous avez toutes les bonnes réponses !";
        }
    ?>
    </p>
        
</body>
</html>