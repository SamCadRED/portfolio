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
                    <p class="nav_active" ><a href=""><?php echo $ppe2 ?></a></p>
                </div>
            </div>
            <p><a href="veille.php">Veille</a></p>
            <div class="activitee_menu">
                <p><a href="" onclick="showActivitee()">Activités professionnelles </a></p>
                <div id="ac_visible">
                    <p><a href="activitee/activitee1.php"><?php echo $acti1 ?></a></p>
                    <p><a href="activitee/activitee2.php"><?php echo $acti2 ?></a></p>
                    <p><a href="activitee/activitee3.php"><?php echo $acti3 ?></a></p>
                    <p><a href="activitee/activitee4.php"><?php echo $acti4 ?></a></p>
                    <p><a href="activitee/activitee5.php"><?php echo $acti5 ?></a></p>
                    <p><a href="activitee/activitee6.php"><?php echo $acti6 ?></a></p>
                    <p><a href="activitee/activitee7.php"><?php echo $acti7 ?></a></p>
                    <p><a href="activitee/activitee8.php"><?php echo $acti8 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti9 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti10 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti11 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti12 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti13 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti14 ?></a></p>
                    <p><a href="activitee/activitee9.php"><?php echo $acti15 ?></a></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>