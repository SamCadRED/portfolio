<?php include_once "../../components/component.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../../components/scripts.js"></script>
    <title>Portfolio</title>
</head>
<body class="body">

    <div class="header_cont">
        <?php echo $header ?>
    </div>

    <div class="nav_cont">
        <div class="nav">
        <p><a href="../../index.php">Accueil</a></p>
            <p><a href="../ecole.php">École & Entreprises</a></p>
            <div class="../deroulant">
                <p><a href="" onclick="showMenu()">PPE</a></p>
                <div id="visible">
                    <p class="ppe"><a href="../ppe1.php"><?php echo $ppe1 ?></a></p>
                    <p class="ppe"><a href="../ppe2.php"><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="../veille.php">Veille</a></p>
            <div class="activite_menu">
                <p><a href="" onclick="showactivite()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p><a href="activite1.php"><?php echo $acti1 ?></a></p>
                    <p><a href="activite2.php"><?php echo $acti2 ?></a></p>
                    <p><a href="activite3.php"><?php echo $acti3 ?></a></p>
                    <p ><a href="activite4.php"><?php echo $acti4 ?></a></p>
                    <p><a href="activite5.php"><?php echo $acti5 ?></a></p>
                    <p><a href="activite6.php"><?php echo $acti6 ?></a></p>
                    <p><a href="activite7.php"><?php echo $acti7 ?></a></p>
                    <p class="nav_active"><a href=""><?php echo $acti8 ?></a></p>
                    <p><a href="activite9.php"><?php echo $acti9 ?></a></p>
                    <p><a href="activite10.php"><?php echo $acti10 ?></a></p>
                    <p><a href="activite11.php"><?php echo $acti11 ?></a></p>
                    <p><a href="activite12.php"><?php echo $acti12 ?></a></p>
                    <p><a href="activite13.php"><?php echo $acti13 ?></a></p>
                    <p><a href="activite14.php"><?php echo $acti14 ?></a></p>
                    <p><a href="activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

   <div class='activite'>
        <div class="activite_header">
            <h1 class='acti_title'><?php echo $acti8 ?></h1>
            <div class="tableau_comp"><a class="button_class" href="../../components/util/tableau_competences.pdf">Tableau de Compétences</a></div>
        </div>
        <?php 
            $page = $_SERVER['REQUEST_URI'];  
            $description = "Création de composants graphiques et logiciels et intégration dans une application mobile.";
            $contexte = "Je l'ai effectué en équipe avec le graphiste de l'entreprise.";
            $objectif = "Étoffer l'application avec des fonctionnalités nouvelles et améliorer l'epxérience utilisateur.";
            $env = "macOS, VSCode, React Native, XCode et Adobe XD.";
            $travail = "- Réunion avec le graphiste pour designer l'écran et les fonctionnalité<br>
            - Le graphiste designe l'écran<br>
            - rédaction du code et développement des fonctionnalités";
            $competence = "
                A1.1.1 Analyse du cahier des charges d'un service à produire<br>
                A1.1.3 Étude des exigences liées à la qualité attendue d'un service<br>
                A1.4.1 Participation à un projet<br>
                A4.2.2 Adaptation d'une solution applicative aux évolutions de ses composants<br>
                A4.2.3 Réalisation des tests nécessaires à la mise en production d'éléments mis à jour";

            echo display_activities($page, $description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
