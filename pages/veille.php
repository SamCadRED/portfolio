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
            <p class="nav_active"><a href="veille.php">Veille</a></p>
            <p><a href="activitees.php">Activités professionnelles </a></p>
        </div>
    </div>

    <div class="head_cont">
        <div class="headband">
            <h1>Veille Technologique</h1>
            <h2>Le Machine Learning</h2>
        </div>
    </div>
    <div class="main_content">
        <div class="intro">
            <h2>Organiser sa veille technologique :</h2>
            <p>L'organisation de ma veille peut se simplifier en 4 étapes :</p>
            <ul>
                <li><strong>Le Ciblage</strong> du sujet de veille</li>
                <li><strong>La Recherche</strong> par mots clés et grâce à différents médias</li>
                <li><strong>L'analyse</strong> du contenu récupéré</li>
                <li><strong>La Diffusion</strong> du contenu grâce a d'autres médias</li>
            </ul>
        </div>

        <div class="pres_card">
            <div class="card">
                <?php 
                    $title = "Ciblage";
                    $text = "Pour mon sujet de veille j'ai choisi le framework React Native,
                    C'est un framework JavaScript mobile cross-plateforme, c'est à dire qu'il permet d'écrire des applications mobiles pour Android et iOS.";
                    echo display_card($title, $text) 
                ?>
            </div>
            <div class="card">
                <?php 
                    $title = "Recherche";
                    $text = "https://www.lafermeduweb.net/tag/machinelearning
                    https://likeabot.io/blog/veille-like-a-bot-6-ia-algorithme-machine-learning-et-apprentissage-supervise-comment-rendre-son-chatbot-intelligent
                    ";
                    echo display_card($title, $text) 
                ?>
            </div>
            <div class="card">
                <?php 
                    $title = "Analyse";
                    $text = "";
                    echo display_card($title, $text) 
                ?>
            </div>
            <div class="card">
                <?php 
                    $title = "Diffusion";
                    $text = "";
                    echo display_card($title, $text) 
                ?>
            </div>
        </div>
    </div>
    
    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>