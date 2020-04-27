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
                    
                    <p>Aujourd'hui, le Machne Learning est utlisé dans toutes les entrprises souhaitant effectuer de la "récolte de données" c'est un outil indispensable dans la matière. Les GAFAM, sont très souvent pionniers en la matière car pour Facebook ou Google par exemple, l'aggrégation de données est au centre de leur business model.</p>
                    <p>Avec des technologies de plus en plus performantes et des intelligences artificielles de plus en plus intelligentes justement, il est très important pour nous consommateurs, et nos gouvernements de connaître ces technologies afin de ne pas perdre encore plus le contrôle sur ces données.</p>

                    <p>Aujourd'hui le moyen le plus performant pour faire progresser une IA, est de lui fournir un maximun de données, c'est pourquoi Google, Amazon ou encore Facebook, sont les leader en la matière.</p>
                    
                    <p>Par exemple, en septembre 2019, des fuite sur le sites de la NASA stipulait que Google avait réussi à mettre au point un ordinateur quantique, ce fût ensuite confirmé plus tard par l'entreprise dans cet <a style="color:white;" href="https://www.nature.com/articles/s41586-019-1666-5">article</a>.<br>Pour le Machine Learning et l'IA c'est un pas de géant qui a été franchi, car un ordinateur quantique permettrait d'effectuer des tâches de calcul impossible pour un ordinateur classique dans un laps de temps record. <a style="color:white;" href="https://www.lesechos.fr/2015/12/google-presente-son-ordinateur-quantique-100-millions-de-fois-plus-rapide-quun-ordinateur-classique-284495">Source</a></p>
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
                        
                        Sur ce même site de veille, j'ai ajouté une catégorie permettant de conserver les articles et autres médias intéressants (Podcast audio par exemple). Cela permet selon moi, de garder des repères sur certains évenements qui me semble importants.";
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
