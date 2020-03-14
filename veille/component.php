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
    "https%3A%2F%2Fwww.lafermeduweb.net%2Ftag%2Frss%2Fmachinelearning.xml",
    "https%3A%2F%2Fnanonets.com%2Fblog%2Frss%2F",
    "http%3A%2F%2Fnews.mit.edu%2Frss%2Ftopic%2Fmachine-learning",
    "https%3A%2F%2Fmedium.com%2Ffeed%2Ftag%2Fmachine-learning",
    "https%3A%2F%2Fmedium.com%2Ffeed%2Ftopic%2Fartificial-intelligence"
);
$feedHead = "//rss.bloople.net/?url=";
$feedParam = "&detail=24&limit=1&showtitle=false&type=js";

$imgArray = array("images/veille/fermeweb.png","images/veille/nanonets.jpg", "images/veille/mit.jpg", "images/veille/medium.png","images/veille/medium.png");

$sourceArray = array("La Ferme du Web", "NanoNets", "M.I.T News", "Medium /Machine Learning", "Medium /Artificial Intelligence");

$saved = array(
    "http://news.mit.edu/2020/data-feminism-catherine-dignazio-0309",
    "https://www.lafermeduweb.net/veille/une-collection-de-ressources-dediees-au-machine-learning"
);

function display_feed($url, $img, $source) {
    return "
        <div id='feedid' class='feed_cont' style='background-image: linear-gradient(to bottom,rgba(200, 200, 200, 0.8), rgba(200, 200, 200, 0.8) ), url(".$img.")'>
            <script src='".$url."'></script>
            <p style='font-size: 100%'>".$source."</p>
        </div>";
}

function get_title($url){
    $str = file_get_contents($url);
    if(strlen($str)>0){
      $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
      preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title); // ignore case
      return $title[1];
    }
  }