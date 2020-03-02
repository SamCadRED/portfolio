<?php include_once "components/component.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
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
            <div class="deroulant">
                <p><a href="" onclick="showMenu()">PPE</a></p>
                <div id="visible">
                    <p class="ppe"><a href="pages/ppe1.php"><?php echo $ppe1 ?></a></p>
                    <p class="ppe"><a href="pages/ppe2.php"><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="pages/veille.php">Veille</a></p>
            <div class="activite_menu">
                <p><a href="" onclick="showactivite()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p><a href="pages/activite/activite1.php"><?php echo $acti1 ?></a></p>
                    <p><a href="pages/activite/activite2.php"><?php echo $acti2 ?></a></p>
                    <p><a href="pages/activite/activite3.php"><?php echo $acti3 ?></a></p>
                    <p><a href="pages/activite/activite4.php"><?php echo $acti4 ?></a></p>
                    <p><a href="pages/activite/activite5.php"><?php echo $acti5 ?></a></p>
                    <p><a href="pages/activite/activite6.php"><?php echo $acti6 ?></a></p>
                    <p><a href="pages/activite/activite7.php"><?php echo $acti7 ?></a></p>
                    <p><a href="pages/activite/activite8.php"><?php echo $acti8 ?></a></p>
                    <p><a href="pages/activite/activite9.php"><?php echo $acti9 ?></a></p>
                    <p><a href="pages/activite/activite10.php"><?php echo $acti10 ?></a></p>
                    <p><a href="pages/activite/activite11.php"><?php echo $acti11 ?></a></p>
                    <p><a href="pages/activite/activite12.php"><?php echo $acti12 ?></a></p>
                    <p><a href="pages/activite/activite13.php"><?php echo $acti13 ?></a></p>
                    <p><a href="pages/activite/activite14.php"><?php echo $acti14 ?></a></p>
                    <p><a href="pages/activite/activite15.php"><?php echo $acti15 ?></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <?php 
            $title = "A propos";
            $second_title = "Découvrez mon travail";
            $text = "Depuis mes débuts dans le domaine, mon implication et ma motivation m'ont permis de prendre part à des projets et expériences exceptionnels. Prenez le temps de découvrir mon portfolio. Vous y trouverez une collection de mes collaborations, et de mes projets personnels.";
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
                    $post_desciption = "Je faisait du support par téléphone dans le siège social européen d'Apple. Mes tâches consistaient à dépanner les clients particulier de l'entreprise sur leurs appareils Mac, iPhone, iPad et Watch.";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

            <div class="ido-data_case">
                <?php 
                    $img_url = "images/ido-data.png";
                    $title = "Ido-Data";
                    $date = "Octobre 2018 - Septembre 2019";
                    $post = "Développeur Junior";
                    $post_desciption = "Je travaillait en tant que développeur junior chez ido-data. J'effectuait des tâches de refactorisation et de documentation du code, mais aussi des tâches de tests et de développement";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

            <div class="mecaluxco_case">
                <?php 
                    $img_url = "images/mecalux.png";
                    $title = "Mecalux";
                    $date = "Septembre 2019 - Ajourd'hui";
                    $post = "Développeur & Technicien Support";
                    $post_desciption = "J'effectue des missions de dépannage et de support, ainsi que des tâches de développpement et de configuration de serveurs.";
                    echo display_company_case($img_url, $title, $date, $post, $post_desciption);
                ?>
            </div>

        </div>
        <div class="add_cv_button_div"><a class="button_class" href="components/cv_samuel-cadiou.pdf" download>Télécharger mon CV</a></div>
    </div>

    <div class="tech_skills">
        <h2>Compétences Techniques</h2>

        <div class="skills_cont">

            <div class="program_cont">
                <h3 style="color: var(--color-light)">Logiciels Maîtrisés</h3>
                <div class="img_cont">
                    <img class="prog_img" title="Visual Studio Code" src="images/vscode_logo.png" alt="Visual Studio Code">
                    <img class="prog_img" title="MySQL Workbench" src="images/MySQLWorkbench.png" alt="MySQL Workbench">
                    <img class="prog_img" title="Eclipse" src="images/logo_eclipse.png" alt="eclipse">
                    <img class="prog_img" title="Mamp" src="images/mamp.png" alt="mamp">
                    <img class="prog_img" title="Postman" src="images/postman-logo.png" alt="postman">
                    <img class="prog_img" title="IntelliJ" src="images/intellij.png" alt="IntelliJ">
                </div>
            </div>

            <div class="graph_cont">
                <div class="graphs">
                    <h3>Languages</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td>HTML/CSS</td>
                                <td><div class="line1" style="width: 400px"></div></td>
                            </tr>
                            <tr>
                                <td>PHP</td>
                                <td><div class="line2" style="width: 300px"></div></td>
                            </tr>
                            <tr>
                                <td>SQL</td>
                                <td><div class="line3" style="width: 230px"></div></td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                                <td><div class="line4" style="width: 280px"></div></td>
                            </tr>
                            <tr>
                                <td>Java</td>
                                <td><div class="line5" style="width: 240px"></div></td>
                            </tr>
                            <tr>
                                <td>C#/LinQ</td>
                                <td><div class="line6" style="width: 230px"></div></td>
                            </tr>
                        </tbody>
                    </table>
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
