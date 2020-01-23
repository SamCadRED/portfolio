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
            <div class="activitee_menu">
                <p><a href="" onclick="showActivitee()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p class="activitee"><a href="activitee1.php">Activitee 1</a></p>
                    <p class="activitee"><a href="activitee2.php">Activitee 2</a></p>
                    <p class="nav_active" class="activitee"><a href="">Activitee 3</a></p>
                    <p class="activitee"><a href="activitee4.php">Activitee 4</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="main_cont">
        <h1 style="color:var(--color-dark); padding-left:5%">Mes Activitées professionnelles : </h1>

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
                $conclusion = "Je n'avais jamais effectué de procédure de tests auparavant c'était donc la principale difficulté, cependant j'ai pu rapidement trouver mon rythme et offrir des résultats concluants.";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite3">
            <?php 
                $titre = "Mise ne place d'un service de support (ticketing)";
                $desc = "Ma mission consistait à interfacer la CRM Axonaut avec notre infrastructure AWS. Les mails de support sont reçu sur AWS et je pouvait ensuite les rediriger vers l'API d'axonaut afin de récupérer les informations de contact et de créer automatiquement un ticket dans la CRM.";
                $contexte = "La division support prenant de plus en plus d'importance dans l'entreprise, il fallait mettre en place un outil de suivi et de gestion.";
                $env = "Je l'ai effectué seul en entreprise avec les outil AWS-CLI, AWS SES, Axonaut.fr.";
                $objectif = "";
                $conclusion = "Cette activitée m'a permit d'améliorer mes compétences de vision d'ensemble sur ma mise en place d'un tel service ainsi que mes compétences générale sur AWS.";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite4">
            <?php 
                $titre = "Mise en place d'un service d'emailing sur AWS SES";
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
                $titre = "Création de composants d'application mobile";
                $desc = "Je me suis vu assigné la tâche de créer des composants graphiques et fonctionnels sur l'application mobile développée par l'entreprise.";
                $contexte = "Le développeur senior avant besoin d'^tre déchargé sur des petits développements d'amélioration.";
                $env = "J'ai effectué ce travail seul en entreprise, sur macOS et en utilisant GitHub et le framework React Native.";
                $objectif = "L'objectif était de créer des composants focntionnels pour l'application en suivant les directive du designer.";
                $conclusion = "J'ai adorer effectuer ces développements, la prise difficulté à été de prendre en main le framework React Native.";
                echo display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion);
            ?>
        </div>

        <div class="activite6">
            <?php 
                $titre = "Mise en place d'une veille technologique";
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
                $titre = "Intervention sur un arrêt de production client";
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