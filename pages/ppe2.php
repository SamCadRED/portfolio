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
                    <p class="nav_active" ><a href=""><?php echo $ppe2 ?></a></p>
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
    </div>
    
    <?php 
        $ppe1 = "Wiki GSB";
        $cont1 = "Suite à la fusion des entités Galaxy et Swiss-Bourdin en 2009, le groupe nouveau GSB est devenu leader du marché pharmaceutique.";
        $cont2 = "Afin de fidéliser les particiens clients de l'entreprise, la direction de GSB a décider de fournir à tous ses clients un logiciel permettant d'accéder aux données techniques de leurs produits (prix, molécules actives, risques, etc..).";
        $cont3 = "Cet outil permettra d'une part de renforcer les connaissances des praticiens sur les produits GSB, et d'autres part de rendre leur utilisation plus intéressante grâce aux cannaissances auxquelles il rend accès.";
        $contexte = array($cont1, $cont2, $cont3);
        $etape = array($wip, $wip, $wip);
        $titre = array("Conception de la base de données", "Implémentation en pattern MVC", "Développement de l'UI grâce à JavaFX");
        $img = array('java', 'xml' , 'javafx', 'scenebuilder');
        $url = array("ProjetGSB", "PPE2", "PAPPE2");
        $compétences = $wip;

        echo display_ppe($ppe1, $contexte, $etape, $compétences, $titre, $img, $url)
    ?>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>
