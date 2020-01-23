<?php 
$header = ' <div class="header">
                <h1>SAMUEL CADIOU</h1>
                <!-- <a href="" onclick="setTheme()">
                    <img class="dark_mode" src="/portfolio/images/dark_mode.png" alt="Switch Theme">
                </a> -->
            </div>';

$footer = ' <div class="footer">
                <div class="top_footer">
                    <h4><a href="mailto:samuelcadiou@hotmail.fr">Me contacter par mail</a></h4>
                    <h4><a href="https://www.linkedin.com/in/samuel-cadiou-822759133">LinkedIn</a></h4>
                </div>
                <p>©2020 par Samuel Cadiou</p>
            </div>';

function display_case($title, $second_title, $text) {
    return "<div class='case'>
                <h2>".$title."</h2>
                <h4>".$second_title."</h4>
                <p>".$text."</p>
            </div>";
}

function display_company_case($img_url, $co_name, $date, $post, $post_description) {
    return "<div class='company_case'>
                <img class='co_img' src=".$img_url." alt=".$co_name.">
                <div class='text'>
                    <p>".$date."</p>
                    <h3>".$post."</h3>
                    <p>".$post_description."</p>
                </div>
            </div>";
}

function display_card($title, $text) {
    return '<div class='.$title.'>
                <h2>'.$title.'</h2>
                <p>'.$text.'</p>
            </div>';
}

