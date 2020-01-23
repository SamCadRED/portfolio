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
            <p class="nav_active"><a href="">École & Entreprises</a></p>
            <div class="deroulant">
                <p><a href="" onclick="showMenu()">PPE</a></p>
                <div id="visible">
                    <p class="ppe"><a href="ppe1.php">PPE 1</a></p>
                    <p class="ppe"><a href="ppe2.php">PPE 2</a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
            <div class="activitee_menu">
                <p><a href="" onclick="showActivitee()">Activités professionnelles</a></p>
                <div id="ac_visible">
                    <p class="activitee"><a href="activitee1.php">Activitee 1</a></p>
                    <p class="activitee"><a href="activitee2.php">Activitee 2</a></p>
                    <p class="activitee"><a href="activitee3.php">Activitee 3</a></p>
                    <p class="activitee"><a href="activitee4.php">Activitee 4</a></p>
                    <p class="activitee"><a href="activitee5.php">Activitee 5</a></p>
                    <p class="activitee"><a href="activitee6.php">Activitee 6</a></p>
                    <p class="activitee"><a href="activitee7.php">Activitee 7</a></p>
                </div>
            </div>
        </div>
    </div>

        <div class="afip_case">
            <?php 
                $title = "AFIP";
                $second_title = "Découvrez mes projets et les compétences acquises ";
                $text = "A l'Afip j'ai appris ";
                echo display_case($title, $second_title, $text);
            ?>
        </div>

        <div class="ido-data_case">
            <?php 
                $title = "Ido-Data";
                $second_title = "Le choix d'une start-up";
                $text = "Lors de ma recherche d'entreprise en septembre 2018, mon choix d'alternance ce portait plus sur une petite entreprise que sur un grand groupe.<br>
                J'ai fait ce choix car je sortais d'une expérience professionnelle dans une firm multi-nationale, et je souhaitais tester autre chose.<br>
                En octobre 2018, j'ai donc été embauché dans la start-up Ido-Data, une société spécialisée dans la conception d'objets et de solutions connectés dans le but de prévenir les risques liés aux sports et loisirs (nautiques principalement).";
                echo  display_case($title, $second_title, $text);
            ?>
        </div>

        <div class="mecalux_case">
            <?php 
                $title = "Mecalux";
                $second_title = "Un grand groupe";
                $text = "Après mon expérience dans une PME, j'ai mieux cerner mes besoins professionnels et les environnements de travail dans lesquels je suis le plus productif. J'ai appris que je n'avais pas encore la maturité professionnelle ni l'expérience nécessaire pour parvenir à remplir mes attentes ni celles de l'entreprise.<br>
                C'est pourquoi j'ai décidé de me diriger vers un plus grand groupe, Mecalux, ou je pouvais avoir l'accompagnement nécessaire lors de mes débuts ainsi qu'une formation sur mes prochaines missions.";
                echo  display_case($title, $second_title, $text);
            ?>
        </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>