<?php include_once "../../components/component.php" ?>

<!DOCTYPE html>
<html lang="en">
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
                    <p><a href="activite14.php"><?php echo $acti14 ?></a></p>
                    <p><a class="nav_active" href=""><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class='activite'>
        <h1 class='acti_title'><?php echo $acti4 ?></h1>
        <?php 
            $description = "PPE Java : développement d'une application lourde de gestion de stock";
            $contexte = "seul en centre de formation";
            $objectif = "";
            $env = "Java 1.8, IntelliJ, PHPMyAdmin, Windows 10 et macOS";
            $travail = "";
            $competence = "
                A1.1.1 Analyse du cahier des charges d'un service à produire<br>
                A1.2.4 Détermination des tests nécessaires à la validation<br>
                A3.1.1 Proposition d'une solution d'infrastructure<br>
                A3.1.2 Maquettage et prototypage d'une solution d'infrastructure<br>
                A4.1.2 Conception ou adaptation de l'interface utilisateur<br>
                A4.1.3 Conception ou adaptation d'une base de données<br>
                A4.1.4 Définition des caractéristiques d'une solution applicative<br>
                A4.1.5 Prototypage de composants logiciels<br>
                A4.1.6 Gestion d'environnements de développement et de test<br>
                A4.1.7 Développement, utilisation ou adaptation de composants<br>
                A4.1.8 Réalisation des tests nécessaires à la validation<br>
                A4.1.9 Rédaction d'une documentation technique<br>
                A4.2.2 Adaptation d'une solution applicative aux évolutions<br>
                A4.2.3 Réalisation des tests nécessaires à la mise en production
            ";

            echo display_activities($description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>