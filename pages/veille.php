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
                        $text = "Pour mon sujet de veille j'ai choisi de me concentrer sur le Machine Learning, c'est un sujet qui, dans le milieu de l'entreprise est énormément abordé. il représente à mon sens un des enjeux du futur mais aussi et surtout du présent.";
                        echo display_card($title, $text) 
                    ?>
                </div>
                <div class="card">
                    <?php 
                        $title = "Recherche";
                        $text = "J'ai effectué mes recherches et rassemblé des informations grâce à différents médias notamment l'application <a href='https://twitter.com'>Twitter</a> et les sites web : <br>
                        <a href='https://www.lafermeduweb.net/tag/machinelearning'>- lafermeduweb.net</a> <br>
                        <a href='https://likeabot.io/blog/veille-like-a-bot-6-ia-algorithme-machine-learning-et-apprentissage-supervise-comment-rendre-son-chatbot-intelligent'>- likeabot.io</a><br>
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
        <div class="right_content">
            <h2>Flux RSS</h2>
            <div class="rss_feed">
                <script src="//rss.bloople.net/?url=https%3A%2F%2Fnews.google.com%2Frss%2Fsearch%3Fq%3DMachine%2BLearning%26hl%3Den-US%26gl%3DUS%26ceid%3DUS%253Aen%26x%3D1571747125.1658&detail=-1&limit=15&showtitle=false&type=js">
                </script>
            </div>
        </div>
    </div>
    
    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
