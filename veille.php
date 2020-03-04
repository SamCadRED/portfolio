<?php include_once "components/component.php" ?>
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
                <a href="index.php">Revenir sur le portfolio</a>
            </div>
        </div>
    </header>

    <div id="main_content">

        <div class="rss">
            <h2>Flux RSS</h2>
            <div class="feed_cont">

                <div class="google_feed">
                    <h3>Google News</h3>
                    <div class="rss_feed">
                        <script src="//rss.bloople.net/?url=https%3A%2F%2Fnews.google.com%2Frss%2Fsearch%3Fq%3DMachine%2BLearning%26hl%3Den-US%26gl%3DUS%26ceid%3DUS%253Aen%26x%3D1571747125.1658&detail=-1&limit=20&showtitle=false&type=js"></script>
                    </div>
                </div>
                
                <hr>

                <div class="ferme_feed">
                    <h3>La Ferme du Web</h3>
                    <div class="rss_feed">
                        <script src="//rss.bloople.net/?url=https%3A%2F%2Fwww.lafermeduweb.net%2Ftag%2Frss%2Fmachinelearning.xml&detail=-1&limit=20&showtitle=false&type=js"></script>
                    </div>
                </div>

                <div class="medium_feed">
                    <h3>Medium</h3>
                    <div class="rss_feed">
                        <script src="//rss.bloople.net/?url=https%3A%2F%2Fmedium.com%2Ffeed%2Ftag%2Fdata-science&detail=-1&showtitle=false&type=js"></script>
                    </div>
                </div>
                
            </div>
        </div>

        <hr>

        <div class="websites">
            <h2>Articles Presse / Site Web</h2>
        </div>

        <hr>

        <div class="others">
            <h2>Autres</h2>
            <div class="podcast">
                <h3>Podcast</h3>
                <div class="savant">
                    <iframe src="https://open.spotify.com/embed-podcast/episode/0wnHHEy63nmojdkkI4AHOF" width="100%" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    <!-- Spotify integration https://developer.spotify.com/documentation/widgets/generate/play-button/ -->
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="footer_cont">
        <?php echo $footer ?>
    </div>
</body>
</html>