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
                    <h4><a href="https://www.linkedin.com/in/samuel-cadiou-822759133" target="_blank">LinkedIn</a></h4>
                    <h4><a href="https://github.com/SamCadRED/portfolio" target="_blank">GitHub</a></h4>
                </div>
                <p>©2020 par Samuel Cadiou</p>
            </div>';

// Nav pages name : 
$ppe1 = "GSB Agenda";
$ppe2 = "GSB Wiki";

$acti1 = "Création d'un site de support";
$acti2 = "Test de bracelets connectés";
$acti3 = "Réunion RGPD";
$acti4 = "Mise en place d'emailing";
$acti5 = "Gestion d'une CRM";
$acti6 = "Mise en place de ticketing";
$acti7 = "Maintenance d'une application mobile";
$acti8 = "Développement de composants";
$acti9 = "Veille technologique";
$acti10 = "Déploiement de VM";
$acti11 = "Assistance client";
$acti12 = "Création de documentation";
$acti13 = "PPE équipement visiteurs (1ère année)";
$acti14 = "PPE Léger (2ème année)";
$acti15 = "PPE lourd (2ème année)";

$wip = '<div style="background-color: var(--color-dark); color: var(--color-light); padding: 10px; margin: 10px; text-align: center; border: solid var(--color-light) 1px;">
          <h3>Work in Progress</h3>
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

function display_ppe() {
    return '';
}

function display_activities($description, $contexte, $objectif, $env, $travail, $competence) {
    return "<div class='acti_cont'>
                <div class='acti_cont_text'>
                    <h3>• Description :</h3>
                    <p>".$description."</p><br>
                    <h3>• Contexte et localisation : </h3>
                    <p>".$contexte."</p><br>
                    <h3>• Objectifs :</h3>
                    <p>".$objectif."</p><br>
                    <h3>• Environnement Technologique :</h3>
                    <p>".$env."</p><br>
                    <h3>• Travail effectué :</h3>
                    <p>".$travail."</p><br>
                </div>
                <div class='acti_cont_skills'>
                    <h3>Compétences acquises :</h3>
                    <p>".$competence."</p>
                </div>
            </div>";
}
