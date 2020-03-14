<?php include_once "../components/component.php" ?>

<!DOCTYPE html>
<html lang="fr">
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
            <p class="nav_active"><a href="veille.php">Veille</a></p>
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

    <div class="head_cont">
        <div class="headband">
            <h1>Veille Technologique</h1>
            <h2>Le Machine Learning</h2>
        </div>
    </div>
    <div class="main_content">
        <div class="left_content">
            <div class="top_content">
                <div class="intro">
                    <h2>Définitions : </h2>
                    <p><strong>La veille technologique</strong>, élément de la veille stratégique, consiste à surveiller <strong>les évolutions techniques</strong>, les innovations dans un secteur d’activité donnée. La veille technologique comprend notamment la <strong>surveillance, la collecte, le partage et la diffusion</strong> d’informations permettant d’anticiper ou de s’informer sur des changements en matière de recherche, développement, brevet, lancement de nouveaux produits, matériaux, processus, concepts, innovation de fabrication, etc…. Cela a pour but d’évaluer <strong>l’impact</strong> sur l’environnement et l’organisation.</p>
                    <h2>Sujet de Veille : </h2>
                    <p>Comme indiqué plus haut, j'ai choisi de faire ma veille techniques sur le <strong>Machine Learning</strong> qui est une composante de l'Intelligence Artificielle, et plus précisement sur ses enjeux <strong>futurs</strong> mais aussi et surtout <strong>présents</strong>.<p>
                </div>
                
                <div class="bouton_veille">
                        <a class="button_link" href="../veille.php">Voir le site de veille</a>
                </div>
            </div>

            <div class="pres_card">
                <div class="card">
                    <?php 
                        $title = "Mise en place de la veille :";
                        $text = "Pour pouvoir effectuer ma veille technologique correctement, j'ai mis en place un site regroupant plusieurs flux RSS vers différents site spécialisé dans les nouvelles technologies, tels que Medium, MIT News ou encore la ferme du web.<br>
                        Ces différents flux RSS affichent le dernier article en date publier sur chacun de ces sites.<br><br>
                        
                        Sur ce même site de veille, j'ai ajouté une catégoriepermettant de conserver les articles et autres médias intéressants (Podcast audio par exemple). Cela permet selon moi, de garder des repères sur certains évenements qui me semble importants.";
                        echo display_card($title, $text) 
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
