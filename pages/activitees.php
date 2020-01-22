<?php include_once "../components/component.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../components/scripts.js"></script>
    <title>Portfolio</title>
</head>
<body class="body">

    <div class="header_cont">
        <?php echo $header ?>
    </div>

    <div class="nav_cont">
        <div class="nav">
            <p><a href="../index.php">Accueil</a></p>
            <p><a href="ecole.php">École & Entreprises</a></p>
            <div class="deroulant">
                <p><a href="" onclick="showMenu()">PPE</a></p>
                <div id="visible">
                    <p class="ppe"><a href="ppe1.php">PPE 1</a></p>
                    <p class="ppe"><a href="ppe2.php">PPE 2</a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
            <p class="nav_active"><a href="">Activités professionnelles </a></p>
        </div>
    </div>

    <div class="main_cont">
        <h1 style="color:black; padding-left:5%">Mes Activitées professionnelles : </h1>

        <div class="activitee1">
            <?php 
                $titre = "Test de balise";
                $desc = "J'ai créer des procédures de test et les ai appliqués sur des objets connectés";
                $contexte = "Il était de plus en plus urgent de posséder des metriques sur nos objets connectés";
                $env = "Je l'ai effectué seul, en entreprise, sur un environnement macOS et Excel";
                $objectif = "L'objectif état de rassembler le plus de métriques concernant les objets";
                $conclusion = "Je n'avais jamais effectué de procédure de tests auparavant c'était donc la majeure difficulté,cependant j'ai pu rapidement trouver mon rythme et offrir des résultats.";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>