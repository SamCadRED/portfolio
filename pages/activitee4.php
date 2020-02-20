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
                    <p><a href="activitee2.php"><?php echo $acti2 ?></a></p>
                    <p><a href="activitee3.php"><?php echo $acti3 ?></a></p>
                    <p class="nav_active" ><a href=""><?php echo $acti4 ?></a></p>
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
        <h1 class='acti_title'><?php echo $acti4 ?></h1>
        <?php 
            $description = "Création de composants graphiques et logiciels et intégration dans une application mobile.";
            $contexte = "Je l'ai effectué en équipe avec le graphiste de l'entreprise.";
            $objectif = "Étoffer l'application avce des fonctionnalités nouvelles et améliorer l'epxérience utilisateur.";
            $env = "macOS, VSCode, React Native, XCode et Adobe XD.";
            $travail = "- Réunion avec le graphiste pour designer l'écran et les fonctionnalité
            - Le graphiste designe l'écran
            - rédaction du code et développement des fonctionnalités";
            $competence = "";

            echo display_activities($description, $contexte, $objectif, $env, $travail, $competence);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>