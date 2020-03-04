<?php 
$footer = "<footer class='footer'>
                <div class='top_footer'>
                    <h4><a href='mailto:samuelcadiou@hotmail.fr'>Me contacter par mail</a></h4>
                    <h4><a href='https://www.linkedin.com/in/samuel-cadiou-822759133' target='_blank'>LinkedIn</a></h4>
                    <h4><a href='https://github.com/SamCadRED/portfolio' target='_blank'>GitHub</a></h4>
                </div>
                <p>©2020 par Samuel Cadiou</p>
            </footer>";


$urlArray = array(
    "//rss.bloople.net/?url=https%3A%2F%2Fwww.lafermeduweb.net%2Ftag%2Frss%2Fmachinelearning.xml%3Fsearch_veille%255Bsorting%255D%3D%26search_veille%255BnbPerPages%255D%3D10%26search_veille%255BdateInterval%255D%3D%26search_veille%255Bauthor%255D%3D%26search_veille%255Blang%255D%3Dall%26search_veille%255Bsearch%255D%3D&limit=1&showtitle=false&type=js",
    "//rss.bloople.net/?url=https%3A%2F%2Fnanonets.com%2Fblog%2Frss%2F&limit=1&showtitle=false&type=js",
    "//rss.bloople.net/?url=http%3A%2F%2Fnews.mit.edu%2Frss%2Ftopic%2Fmachine-learning&limit=1&showtitle=false&type=js",
    "//rss.bloople.net/?url=https%3A%2F%2Fmedium.com%2Ffeed%2Ftag%2Fmachine-learning&limit=1&showtitle=false&type=js",
    "//rss.bloople.net/?url=https%3A%2F%2Fmedium.com%2Ffeed%2Ftopic%2Fartificial-intelligence&limit=1&showtitle=false&type=js"
);

$imgArray = array("images/veille/fermeweb.png","images/veille/nanonets.jpg", "images/veille/mit.jpg", "images/veille/medium.png","images/veille/medium.png");

$sourceArray = array("La Ferme du Web", "NanoNets", "M.I.T News", "Medium /Machine Learning", "Medium /Artificial Intelligence");

function display_feed($url, $img, $source) {
    return "
        <div class='feed_cont' style='background-image: linear-gradient(to bottom,rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6) ), url(".$img.")'>
            <script src='".$url."'></script>
            <p>".$source."</p>
        </div>";
} 