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
                    <p><a href="activite8.php"><?php echo $acti8 ?></a></p>
                    <p><a href="activite9.php"><?php echo $acti9 ?></a></p>
                    <p><a href="activite10.php"><?php echo $acti10 ?></a></p>
                    <p><a href="activite11.php"><?php echo $acti11 ?></a></p>
                    <p><a href="activite12.php"><?php echo $acti12 ?></a></p>
                    <p><a href="activite13.php"><?php echo $acti13 ?></a></p>
                    <p class="nav_active"><a href=""><?php echo $acti14 ?></a></p>
                    <p><a href="activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

   <div class='activite'>
        <div class="activite_header">
            <h1 class='acti_title'><?php echo $acti14 ?></h1>
            <div class="tableau_comp"><a class="button_class" href="../../components/util/tableau_competences.pdf">Tableau de Compétences</a></div>
        </div>
        <?php 
            $page = $_SERVER['REQUEST_URI'];  
            $description = "PPE Web : création d'un agenda en ligne pour les commerciaux de GSB";
            $contexte = "Seul en centre de formation";
            $objectif = "Réaliser un agenda en ligne facilement utilisable pour que les commerciaux puissent gérer leur différents rendez-vous le plus simplement possible et de manière sécurisée.";
            $env = "Visual Studio Code, PHPMyAdmin, SQL et PHP";
            $travail = "Elaboration du cahier des charges et de la base de données (MLD). Puis développement du site web (HTML, CSS, PHP, JavaScript) et création de la base donnée (MySQL). Le tout à été versionné puis adapté pour fonctionner sur une VM Debian installée sur l'infrastructure de l'école.
            <br><br><a style='color:white' href='../ppe1.php'>Voir le détail du PPE</a>";
            $competence = "
                A1.1.1 Analyse du cahier des charges d'un service à produire<br>
                A1.2.1 Élaboration et présentation d'un dossier de choix<br>
                A1.3.4 Déploiement d'un service<br>
                A1.4.1 Participation à un projet<br>
                A4.1.1 Proposition d'une solution applicative<br>
                A4.1.2 Conception ou adaptation de l'interface utilisateur<br>
                A4.1.3 Conception ou adaptation d'une base de données<br>
                A4.1.4 Définition des caractéristiques d'une solution applicative<br>
                A4.1.5 Prototypage de composants logiciels<br>
                A4.1.8 Réalisation des tests nécessaires à la validation<br>
                A4.1.9 Rédaction d'une documentation technique<br>
                A4.1.1 Proposition d'une solution applicative<br>
                A5.2.3 Repérage des compléments de formation<br>
                A5.2.4 Étude d‘une technologie, d'un composant, d'un outil
            ";

            echo display_activities($page, $description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
