<?php include_once "components/component.php" ?>
<!-- pour mettre à jour la prod, il faut commi les chnagements sur la branch production puis éxécuter (en ssh sur le serveur) la commande => git pull https://github.com/SamCadRED/portfolio.git -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="images/logo_sc.png" />
    <script src="components/scripts.js" type="application/javascript"></script>
    <title>Portfolio</title>
</head>
<body class="body">

    <div class="header_cont">
        <?php echo $header ?>
    </div>

    <div class="nav_cont">
        <div class="nav">
            <p class="nav_active"><a href="">Accueil</a></p>
            <p><a href="pages/ecole.php">École & Entreprises</a></p>
            <p><a href="pages/activitees.php">Activités professionnelles </a></p>
            <div class="deroulant">
                <p><a href="" onclick="showMenu()">PPE</a></p>
                <div id="visible">
                    <p class="ppe"><a href="pages/ppe1.php">PPE 1</a></p>
                    <p class="ppe"><a href="pages/ppe2.php">PPE 2</a></p>
                </div>
            </div>
            <p><a href="pages/veille.php">Veille</a></p>
            <p><a href="pages/tableau.php">tableau de synthèse </a></p>
        </div>
        </div>
    </div>

    <div class="about">
        <?php 
            $title = "A propos";
            $second_title = "Découvrez mon travail";
            $text = "Depuis mes débuts dans le domaine, mon implication et ma motivation m'ont permis de prendre part à des projets et expériences exceptionnels. Prenez le temps de découvrir mon portfolio. Vous y trouverez une collection de mes collaborations, mes travaux commandés et mes projets personnels. N'hésitez pas à me contacter pour plus d'informations.";
            echo  display_case($title, $second_title, $text);
        ?>
    </div>

    <div class="cv_case">
        <div class="cv_header">
            <h2>CV</h2>
            <h3>Expérience professionnelle</h3>
        </div>
        <div class="content">
            <div class="apple_case">
                <?php
                    $img_url = "images/apple.png";
                    $title = "Apple";
                    $date = "Mars 2017 - Mars 2018";
                    $post = "Technicien Support";
                    $post_desciption = "Cette section est une description de poste dans votre CV. Décrivez de manière concise le poste, vos responsabilités principales et vos réalisations lorsque vous l'occupiez. Les CV les plus efficaces donnent un aperçu clair et rapide à analyser de votre expérience et de vos projets.";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

            <div class="ido-data_case">
                <?php 
                    $img_url = "images/ido-data.png";
                    $title = "Ido-Data";
                    $date = "Octobre 2018 - Septembre 2019";
                    $post = "Développeur Junior";
                    $post_desciption = "Cette section est une description de poste dans votre CV. Décrivez de manière concise le poste, vos responsabilités principales et vos réalisations lorsque vous l'occupiez. Les CV les plus efficaces donnent un aperçu clair et rapide à analyser de votre expérience et de vos projets.";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

            <div class="mecalux_case">
                <?php 
                    $img_url = "images/mecalux.png";
                    $title = "Mecalux";
                    $date = "Septembre 2019 - Ajourd'hui";
                    $post = "Développeur & Technicien Support";
                    $post_desciption = "Cette section est une description de poste dans votre CV. Décrivez de manière concise le poste, vos responsabilités principales et vos réalisations lorsque vous l'occupiez. Les CV les plus efficaces donnent un aperçu clair et rapide à analyser de votre expérience et de vos projets.";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

        </div>
        <div class="add_cv_button_div"><a class="add_cv_button" href="components/cv_samuel-cadiou.pdf" download>Télécharger mon CV</a></div>
    </div>

    <div class="tech_skills">
        <h2>Compétences Techniques</h2>

        <div class="skills_cont">
            <div class="skill_spacer"></div>

            <div class="graph_cont">
                <div class="graphs">
                    <p>HTML/CSS</p>
                    <p>PHP</p>
                    <p>SQL</p>
                    <p>JavaScript</p>
                    <p>Java</p>
                    <p>C#/LinQ</p>
                </div>
            </div>

            <div class="img_cont">
                    <div class="vs_code"></div>
            </div>
        </div>
    </div>

    <div class="hobby">
        <h2>Hobbys</h2>
        <div class="hobby_cont">
            <div class="hobby_case">
                <div class="guitar">
                    <h3>Guitare</h3>
                    <img class="card_img" src="images/guitare.jpg" alt="Guitare">
                </div>
            </div>
            <div class="hobby_case">
                <div class="developpement">
                    <h3>Développement</h3 >
                    <img class="card_img" src="images/dev.jpg" alt="Développeur">
                </div>
            </div>
            <div class="hobby_case">
                <div class="mao">
                    <h3>M.A.O</h3>
                    <img class="card_img" src="images/mao.jpg" alt="M.A.O">
                </div>
            </div>
        </div>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>