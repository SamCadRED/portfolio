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
                    <p class="nav_active" ><a href=""><?php echo $ppe1 ?></a></p>
                    <p class="ppe"><a href="ppe2.php"><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
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
    
    <div class="ppe_container">
        <h2><?php echo $ppe1 ?></h2>
        <div class="ppe_content">
            
            <h1>Présentation du projet</h1>
            
            <div class="ppe_pres">

                <div class="logogsb_div">
                    <img class="logo_gsb" title="logo GSB" src="../images/logo-gsb.png" alt="Logo GSB">
                </div>
                
                <div class="ppe_main_cont">
                    <div class="contexte_projet"> 
                        <h1>Contexte du projet</h1>
                        <p>Suite à la fusion des entités Galaxy et Swiss-Bourdin en 2009, le groupe nouveau GSB est devenu leader du marché pharmaceutique.</p>
                        <p>Afin de faciliter la planification des rendez-vous de ses commerciaux, l'entreprise a demandé au serivce informatique de développer un agenda en ligne et sécurisé afin de répondre à cette demande.</p>
                        <p>L'objectif de l'outil est de centraliser tous les rendez-vous commerciaux afin de garder la main mise sur les données sensibles que ces derniers peuvent contenir.</p>
                    </div>

                    <div class="realisation_projet">
                        <h1>Réalisation du projet<h3>
                        <div class="etapes_real">
                            <div class="">
                                <h3>1. Conception de la base de donnée</h3>
                                <p></p>
                            </div>
                            <div class="">
                                <h3>2. Développement de l'interface WEB</h3>
                                <p></p>
                            </div>
                            <div class="">
                                <h3>3. Développement du fonctionnel</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="boutons_liens">
                            <div class="bouton_git"><a class="button_class" href="">Voir sur GitHub</a></div>
                            <div class="bouton_ppe"><a class="button_class" href="">Voir le PPE</a></div>
                            <div class="bouton_pappe"><a class="button_class" href="">Voir le PAPPE</a></div>
                        </div>
                    </div>
                </div>

                <div class="competences">
                    <h3>Compétences acquises :</h3>
                    <p>
                        A1.1.1 Analyse du cahier des charges d'un service à produire<br>
                        A1.2.1 Élaboration et présentation d'un dossier de choix<br>
                        A1.3.4 Déploiement d'un service<br>
                        A1.4.1 Participation à un projet<br>
                        A4.1.1 Proposition d'une solution applicative<br>
                        A4.1.2 Conception ou adaptation de l'interface utilisateur<br>
                        A4.1.3 Conception ou adaptation d'une base de données<br>
                        A4.1.4 Définition des caractéristiques d'une solution applicative<br>
                        A4.1.5 Prototypage de composants logiciels<br>
                        A4.1.8 Réalisation des tests nécessaires à la validation<br>
                        A4.1.9 Rédaction d'une documentation technique<br>
                        A4.1.1 Proposition d'une solution applicative<br>
                        A5.2.3 Repérage des compléments de formation<br>
                        A5.2.4 Étude d‘une technologie, d'un composant, d'un outil
                    </p>
                </div>
            </div>                                
        </div>

    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
