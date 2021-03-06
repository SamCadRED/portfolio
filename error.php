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
<body>
    <div class="header_cont">
        <?php echo $header ?>
    </div>
    
    <div style='
            background-image: 
                linear-gradient(to bottom,rgba(0, 0, 0, 0.199), rgba(0, 0, 0, 0.541) ),
                url("images/kepler_system.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            z-index: 0;
            padding: 10%;
        '>
        <?php 
            $title = "Erreur ".$_GET['code'];
            $second_title = "";
            $url_accueil = "<a style='font-size:larger; text-decoration:underline; color:var(--color-white);' href='https://www.samuelcadiou.fr/index.php'>l'accueil</a>";
            $text = "Il semblerait que vous ayez rencontré une erreur, voulez vous revenir à ".$url_accueil." ?";
            echo display_case($title, $second_title, $text);
        ?>
    </div>

    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>