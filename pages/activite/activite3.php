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
                    <p class="nav_active"><a href=""><?php echo $acti3 ?></a></p>
                    <p><a href="activite4.php"><?php echo $acti4 ?></a></p>
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
                    <p><a href="activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class='activite'>
        <h1 class='acti_title'><?php echo $acti3 ?></h1>
        <?php 
            $description = "Interfacer la CRM Axonaut avec notre infrastructure AWS. Les mails de support receptionnés sur AWS sont redirigés vers l'API d'axonaut afin de récupérer les informations de contact et de créer automatiquement un ticket dans la CRM.";
            $contexte = "Je l'ai effectué seul en entreprise";
            $objectif = "Optimiser les échanges clients et augmenter la traçabilité.";
            $env = "macOS, AWS SES, AWS Lambda et Postman.";
            $travail = "Création de requête dans AWS Lambda pour poster les informations provenant d'Amazon SES sur l'API d'Axonaut.";
            $competence = "
                A1.1.1 Analyse du cahier des charges d'un service à produire<br>
                A1.1.2 Étude de l'impact de l'intégration d'un service sur le système informatique<br>
                A1.1.3 Étude des exigences liées à la qualité attendue d'un service<br>
                A1.2.4 Détermination des tests nécessaires à la validation d'un service<br>
                A1.3.1 Test d'intégration et d'acceptation d'un service<br>
                A1.3.3 Accompagnement de la mise en place d'un nouveau service<br>
                A1.3.4 Déploiement d'un service<br>
                A1.4.1 Participation à un projet<br>
                A2.2.1 Suivi et résolution d'incidents<br>
                A3.1.2 Maquettage et prototypage d'une solution d'infrastructure<br>
                A3.2.1 Installation et configuration d'éléments d'infrastructure<br>
                A3.2.3 Mise à jour de la documentation technique d'une solution d'infrastructure";

            echo display_activities($description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>