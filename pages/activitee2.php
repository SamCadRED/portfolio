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
                    <p class="ppe"><a href="ppe1.php"><?php echo $ppe1 ?></a></p>
                    <p class="ppe"><a href="ppe2.php"><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
            <div class="activitee_menu">
                <p><a href="" onclick="showActivitee()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p><a href="activitee1.php"><?php echo $acti1 ?></a></p>
                    <p class="nav_active"><a href=""><?php echo $acti2 ?></a></p>
                    <p><a href="activitee3.php"><?php echo $acti3 ?></a></p>
                    <p><a href="activitee4.php"><?php echo $acti4 ?></a></p>
                    <p><a href="activitee5.php"><?php echo $acti5 ?></a></p>
                    <p><a href="activitee6.php"><?php echo $acti6 ?></a></p>
                    <p><a href="activitee7.php"><?php echo $acti7 ?></a></p>
                    <p><a href="activitee8.php"><?php echo $acti8 ?></a></p>
                    <p><a href="activitee9.php"><?php echo $acti9 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class='activite'>
        <h1 class='acti_title'><?php echo $acti2 ?></h1>
        <?php 
            $description = "Mise en place d'un site WordPress de documentation et de support client.";
            $contexte = "Je l'ai effectué en équipe, dans l'entreprise.";
            $objectif = "Créer un site de support contenant toute la documentation possible concernant le produit vendu par l'entreprise, afin de réduire la charge de travail du support client.";
            $env = "macOS et WordPress";
            $travail = "Rédaction d'une documentation claire, précise et accessible au grand public afin de faciliter la prise en main des utilisateurs finaux.";
            $competence = "
                A1.1.1 Analyse du cahier des charges d'un service à produire
                A1.1.3 Étude des exigences liées à la qualité attendue
                A1.3.3 Accompagnement de la mise en place d'un nouveau service
                A1.4.1 Participation à un projet
                A4.1.2 Conception ou adaptation de l'interface utilisateur
                A5.1.5 Évaluation d'un élément de configuration";

            echo display_activities($description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>