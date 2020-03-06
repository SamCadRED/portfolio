<?php include_once "veille/component.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="veille/style.css">
    <script src="components/scripts.js" type="application/javascript"></script>
    <title>Veille Technologique</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="header_left">
                <h2>Veille Technologique</h2>
                <h1>Machine Learning</h1>
            </div>
            <div class="header_right">
                <a href="pages/veille.php">Revenir sur le portfolio</a>
            </div>
        </div>
    </header>

    <div id="main_content">

        <div class="rss">
            <h1>Flux RSS</h1>
            <div class="rss_container">
                    <?php 
                        $i = 0;
                        while ($i < count($urlArray)) {
                            $url = $feedHead . $urlArray[$i] . $feedParam;
                            $source = $sourceArray[$i];
                            if ($i < count($imgArray)) {
                                $img = $imgArray[$i];
                            } else {
                                $img = "";
                            }
                            
                            echo display_feed($url, $img, $source);
                            $i += 1;
                        }
                    ?>
            </div>
        </div>
        

        <hr>

        <div class="others">
            <div class="podcast">
                <h3>Podcast</h3>
                <div class="savant">
                    <iframe src="https://open.spotify.com/embed-podcast/episode/0wnHHEy63nmojdkkI4AHOF" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    <!-- Spotify integration https://developer.spotify.com/documentation/widgets/generate/play-button/  -->
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>