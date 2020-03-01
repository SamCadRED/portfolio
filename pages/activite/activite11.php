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
                    <p><a class="nav_active" href=""><?php echo $acti11 ?></a></p>
                    <p><a href="activite12.php"><?php echo $acti12 ?></a></p>
                    <p><a href="activite13.php"><?php echo $acti13 ?></a></p>
                    <p><a href="activite14.php"><?php echo $acti14 ?></a></p>
                    <p><a href="activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class='activite'>
        <h1 class='acti_title'><?php echo $acti4 ?></h1>
        <?php 
            $description = "Intervention d'assistance sur le serveur de production client pour résoudre un problème technique bloquant";
            $contexte = "Seul en entreprise";
            $objectif = "Résoudre un problème bloquant sur le serveur du client afin de limiter au maximum les préjudices (arrêt de production)";
            $env = "Windows 10, Oracle";
            $travail = "Notre application métier ne recevait aucune données dela part de l'ERP du client, j'ai pu résoudre le problème en consultant les logs afin d'identifier la source. Il aensuite fallut que je mette à jour les scripts .boo servant à la communication entre les deux applications";
            $competence = "
                A1.1.3 Étude des exigences liées à la qualité attendue<br>
                A4.2.1 Analyse et correction d'un dysfonctionnement<br>
                A5.1.2 Recueil d'informations sur une configuration
            ";

            echo display_activities($description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>