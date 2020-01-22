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

        <div class="activite1">
        <?php 
                $titre = "Création d'un site de support client";
                $desc = "Mise en place d'un site WordPress de documentation et de support client.";
                $contexte = "La plupart des questions traités en support pouvait être évité en créant un site avec la documentation nécessaire.";
                $env = "J'ai effectué cette tâche en équipe dans l'entreprise sur un environnment macOS et WordPress";
                $objectif = "";
                $conclusion = "J'ai pu mettre à contribution mes compétences en développement pou aider ma collègue sur le WordPress ainsi que pu faire profiter de ma précédent expérience en support chez Apple";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>
        
        <div class="activite2">
            <?php 
                $titre = "Test de bracelets connectés";
                $desc = "J'ai créé des procédures de test et les ai appliqués sur des objets connectés";
                $contexte = "Il était de plus en plus urgent de posséder des metriques sur nos objets connectés";
                $env = "Je l'ai effectué seul, en entreprise, sur un environnement macOS et Excel";
                $objectif = "L'objectif état de rassembler le plus de métriques concernant les objets";
                $conclusion = "Je n'avais jamais effectué de procédure de tests auparavant c'était donc la majeure difficulté,cependant j'ai pu rapidement trouver mon rythme et offrir des résultats.";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite3">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite4">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite5">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite6">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite7">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite8">
            <?php 
                $titre = "";
                $desc = "";
                $contexte = "";
                $env = "";
                $objectif = "";
                $conclusion = "";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>