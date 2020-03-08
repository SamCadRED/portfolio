<?php 
$header = " <header class='header'>
                <h1>SAMUEL CADIOU</h1>
                <!-- <a href='' onclick='setTheme()'>
                    <img class='dark_mode' src='/portfolio/images/dark_mode.png' alt='Switch Theme'>
                </a> -->
            </header><div id='top_bar'></div>";

$footer = "<footer class='footer'>
                <div class='top_footer'>
                    <h4><a href='mailto:samuelcadiou@hotmail.fr'>Me contacter par mail</a></h4>
                    <h4><a href='https://www.linkedin.com/in/samuel-cadiou-822759133' target='_blank'>LinkedIn</a></h4>
                    <h4><a href='https://github.com/SamCadRED/portfolio' target='_blank'>GitHub</a></h4>
                </div>
                <p>©2020 par Samuel Cadiou</p>
            </footer>";

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

$wip = '<div class="work_in_progress">
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

function display_ppe($ppe, $contexte, $etape, $compétences, $titre, $img, $url) {
    $all_contexte = "";
    $i = 0;
    while ($i < count($contexte)) {
        $all_contexte = $all_contexte."<p>".$contexte[$i]."</p>";
        $i = $i + 1;
    }

    return "
    <div class='ppe_container'>
        <h1>".$ppe."</h1>
        <div class='ppe_content'>
            <h2 class='ppe_headtitle'>Présentation du projet</h2>
            <div class='ppe_pres'>
                <div class='logogsb_div'>
                    <img class='logo_gsb' title='logo GSB' src='../images/logo-gsb.png' alt='Logo GSB'>
                </div>
                <div class='ppe_main_cont'>
                    <div class='contexte_projet'> 
                        <h1>Contexte du projet</h1>
                        <p>".$all_contexte."</p>
                    </div>

                    <div class='realisation_projet'>
                        <h1>Réalisation du projet</h1>
                        <div class='etapes_real'>
                            <div class='etape'>
                                <h3>1. ".$titre[2]."</h3>
                                <p>".$etape[0]."</p>
                                <div class='images'>
                                    <img src='../images/languages/phpmyadmin.png' alt='PHPMyAdmin'>
                                </div>
                            </div>
                            <div class='etape'>
                                <h3>2. ".$titre[1]."</h3>
                                <p>".$etape[1]."</p>
                                <div class='images'>
                                    <img src='../images/languages/".$img[0].".png' alt='".$img[0]."'>
                                    <img src='../images/languages/".$img[1].".png' alt='".$img[1]."'>
                                </div>
                            </div>
                            <div class='etape'>
                                <h3>3. ".$titre[2]."</h3>
                                <p>".$etape[2]."</p>
                                <div class='images'>
                                    <img src='../images/languages/".$img[2].".png' alt='".$img[2]."'>
                                    <img src='../images/languages/".$img[3].".png' alt='".$img[3]."'>
                                </div>
                            </div>
                        </div>
                        <div class='boutons_liens'>
                            <div class='bouton_git'><a class='button_class' href='https://www.github.com/SamCadRED/".$url[0]."'>Voir sur GitHub</a></div>
                            <div class='bouton_ppe'><a class='button_class' href='components/util/".$url[1]."'>Voir le PPE</a></div>
                            <div class='bouton_pappe'><a class='button_class' href='components/util/".$url[2]."'>Voir le PAPPE</a></div>
                        </div>
                    </div>
                </div>

                <div class='competences_container'>
                    <div class='competences'>
                        <h3>Compétences acquises :</h3>
                        <p>".$compétences."</p>
                    </div>
                </div>
            </div>                                
        </div>
    </div>";
}

function display_activities($page, $description, $contexte, $objectif, $env, $travail, $competence) {
    return "<div class='acti_cont'>
                <div class='arrow_link'>
                    <a href=''><img class='arrow_left' src='../../images/arrow.svg' alt='Précédent'></a>
                </div>
                <div class='main_acitivite'>
                    <div class='acti_cont_text'>
                        ".$page."
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
                </div>
                <div class='arrow_link'>
                    <a href=''><img class='arrow_right' src='../../images/arrow.svg' alt='suivant'></a>
                </div>
            </div>";
}