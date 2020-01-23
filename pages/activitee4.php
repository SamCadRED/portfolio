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
            <p><a href="veille.php">Veille</a></p>
            <div class="activitee_menu">
                <p><a href="" onclick="showActivitee()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p class="activitee"><a href="activitee1.php">Activitee 1</a></p>
                    <p class="activitee"><a href="activitee2.php">Activitee 2</a></p>
                    <p class="activitee"><a href="activitee3.php">Activitee 3</a></p>
                    <p class="nav_active" class="activitee"><a href="">Activitee 4</a></p>
                    <p class="activitee"><a href="activitee5.php">Activitee 5</a></p>
                    <p class="activitee"><a href="activitee6.php">Activitee 6</a></p>
                    <p class="activitee"><a href="activitee7.php">Activitee 7</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>