<?php 
$header = '<div class="header">
                <h1>SAMUEL CADIOU</h1>
        </div>';

$footer = '<div class="footer">
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

function display_activites($titre, $desc, $contexte, $env, $objectif, $conclusion) {
    return "<div class='activite_case'>
                <h2>".$titre."</h2>
                <div class='activite_top'>
                    <div class='description'>
                        <h3>Description : </h3>
                        <p>".$desc."</p>
                    </div>
                    <div class='context'>
                        <h3>Contexte et environnement : </h3>
                        <p>".$contexte."</p>
                        <p>".$env."</p>
                    </div>
                </div>
                <div class='activite_bottom'>
                    <div class='conclusion'>
                        <h3>Objectif et Conclusion</h3>
                        <p>".$objectif."</p>
                        <p>".$conclusion."</p>
                    </div>
                </div>
            </div>";
}