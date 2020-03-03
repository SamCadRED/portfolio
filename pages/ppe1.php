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
                    <p class="nav_active" ><a href=""><?php echo $ppe1 ?></a></p>
                    <p class="ppe"><a href="ppe2.php"><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
            <div class="activite_menu">
                <p><a href="" onclick="showactivite()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p><a href="activite/activite1.php"><?php echo $acti1 ?></a></p>
                    <p><a href="activite/activite2.php"><?php echo $acti2 ?></a></p>
                    <p><a href="activite/activite3.php"><?php echo $acti3 ?></a></p>
                    <p><a href="activite/activite4.php"><?php echo $acti4 ?></a></p>
                    <p><a href="activite/activite5.php"><?php echo $acti5 ?></a></p>
                    <p><a href="activite/activite6.php"><?php echo $acti6 ?></a></p>
                    <p><a href="activite/activite7.php"><?php echo $acti7 ?></a></p>
                    <p><a href="activite/activite8.php"><?php echo $acti8 ?></a></p>
                    <p><a href="activite/activite9.php"><?php echo $acti9 ?></a></p>
                    <p><a href="activite/activite10.php"><?php echo $acti10 ?></a></p>
                    <p><a href="activite/activite11.php"><?php echo $acti11 ?></a></p>
                    <p><a href="activite/activite12.php"><?php echo $acti12 ?></a></p>
                    <p><a href="activite/activite13.php"><?php echo $acti13 ?></a></p>
                    <p><a href="activite/activite14.php"><?php echo $acti14 ?></a></p>
                    <p><a href="activite/activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $ppe1 = "Agenda GSB";
        $cont1 = "Suite à la fusion des entités Galaxy et Swiss-Bourdin en 2009, le groupe nouveau GSB est devenu leader du marché pharmaceutique.";
        $cont2 = "Afin de faciliter la planification des rendez-vous de ses commerciaux, l'entreprise a demandé au serivce informatique de développer un agenda en ligne et sécurisé afin de répondre à cette demande.";
        $cont3 = "L'objectif de l'outil est de centraliser tous les rendez-vous commerciaux afin de garder la main mise sur les données sensibles que ces derniers peuvent contenir.";
        $contexte = array($cont1, $cont2, $cont3);
        $etape = array($wip, $wip, $wip);
        $url = array("GSBAgenda", "", "");
        $compétences = "
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
            A5.2.4 Étude d‘une technologie, d'un composant, d'un outil";

        echo display_ppe($ppe1, $contexte, $etape, $compétences, $url)
    ?>
    

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
