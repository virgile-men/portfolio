<?php

    $title = "Virgile Mendes - Développeur full-stack";
    $description = "Découvrez une sélection de mes projets créatif en développement web et design numérique ainsi que mon parcous, mes compétences et mes expériences";


    include './components/constants.php';

    include ROOT . '/components/head.php';

?>
<body>
    
    <?php include ROOT . '/components/header.php'; ?>

    <div class="display-desktop-portfolio">

        <div class="preview flex-center">
            <!-- Play à partir de Javascript -->
            <video preload="none" id="portrait-chinois" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <video preload="none" id="flowwi" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <video preload="none" id="netflix-ux" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <video preload="none" id="finance-pour-tous" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <video preload="none" id="nike-paris-on-air" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <video preload="none" id="mmi-sland" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 

        <section class="projets">
            <h2>Sélection de projets</h2>
            <ul>
                <li><a href="<?= WEBROOT ?>/projet/portrait-chinois/" data-project="portrait-chinois">Portrait-chinois</a></li>
                <li><a href="<?= WEBROOT ?>/projet/flowwi/" data-project="flowwi">Flowwi</a></li>
                <li><a href="<?= WEBROOT ?>/projet/netflix-ux/" data-project="netflix-ux">Netflix UX</a></li>
                <li><a href="<?= WEBROOT ?>/projet/finance-pour-tous/" data-project="finance-pour-tous">Finance pour tous</a></li>
                <li><a href="<?= WEBROOT ?>/projet/nike-paris-on-air/" data-project="nike-paris-on-air">Nike Paris On Air</a></li>
                <li><a href="<?= WEBROOT ?>/projet/mmi-sland/" data-project="mmi-sland">MMi'SLAND</a></li>
            </ul>
        </section>

    </div>

    <div class="swiper-container portfolio">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/portrait-chinois/">
                    <img src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webp">
                    <h3 class="title-project">Portrait-chinois</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/flowwi/">
                    <img src="<?= CDNROOT ?>/assets/videos/flowwi-intro.webp">
                    <h3 class="title-project">Flowwi</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/netflix-ux/">
                    <img src="<?= CDNROOT ?>/assets/videos/netflixux-intro.webp">
                    <h3 class="title-project">Netflix UX</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/finance-pour-tous/">
                    <img src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webp">
                    <h3 class="title-project filter-invert">Finance pour tous</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/nike-paris-on-air/">
                    <img src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webp">
                    <h3 class="title-project filter-invert">Nike Paris On Air</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/mmi-sland/">
                    <img src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webp">
                    <h3 class="title-project">MMi'SLAND</h3>
                </a>
            </div>
        </div>
      </div>

    <section class="etudes">
        <h2>Études</h2>
        <article>
            <h3>DUT Métiers du Multimédia et de l'Internet</h3>
            <h4>Université Gustave Eiffel</h4>
            <h4>Sept. 2019 - Aujourd'hui</h4>
            <p>Cursus sur les métiers du web, du développement back-end, à l’UX Design, en passant par le webmarketing ou la réalisation de produits audiovisuels.</p>
        </article>
        <article>
            <h3>Baccalauréat Économique et Social</h3>
            <h4>Lycée La Salle</h4>
            <h4>Sept. 2017 - Juin 2019</h4>
            <p>Les principales matières sont les sciences sociales, l'économie et les mathématiques. Lorsque j'ai passé l'examen, j'ai suivi l'option "Histoire de l'art".</p>
        </article>
    </section>





    <section class="experiences">
        <h2>Expérience</h2>
        <article>
            <h3>Développeur full-stack</h3>
            <h4>E-Smoke</h4>
            <h4>Avril 2021 - Aujourd'hui</h4>
            <p>Spécialisé dans le sevrage tabagique grâce au vapotage, E-Smoke compte 10 boutiques. En quête du marché internet, je développe le site e-commerce de l'enseigne.</p>
        </article>
        <article>
            <h3>Chef de projet<br>Développeur back-end</h3>
            <h4>Flowwi</h4>
            <h4>Fév. - Juin 2020</h4>
            <p>Flowwi est une plateforme web référençant près de 900 formations en France allant de Bac +3 à Bac +5 en lien direct avec le DUT Métiers du Multimédia et de l'Internet.</p>
        </article>
        <article>
            <h3>Designer produit</h3>
            <h4>Nike On Air</h4>
            <h4>Fév. 2018</h4>
            <p>Pour l'Air Max Day 2018, Nike a organisé l'événement Paris On Air. La marque a supervisé des ateliers pour la conception de la Air Max "Grand Paris".</p>
        </article>
    </section>




    <section class="competences">
        <h2>Compétences</h2>
        <article>
            <h3>Développement Front-end</h3>
            <h4>HTML / CSS / Javascript ES6</h4>
            <h4>jQuery / Swiper</h4>
            <h4>React / React Native</h4>
            <h4>Three.js</h4>
        </article>
        <article>
            <h3>Développement Back-end</h3>
            <h4>PHP 7 / Symfony</h4>
            <h4>MySQL / NoSQL</h4>
            <h4>NodeJS / ExpressJS</h4>
            <h4>PhpMyAdmin</h4>
        </article>
        <article>
            <h3>Design</h3>
            <h4>Photoshop / Illustrator</h4>
            <h4>Adobe XD</h4>
            <h4>After Effect / Premiere Pro</h4>
        </article>
        <article>
            <h3>Outils</h3>
            <h4>Github / NPM</h4>
            <h4>Google Workspace</h4>
            <h4>Wordpress</h4>
            <h4>Prestashop / Woocommerce</h4>
        </article>
        <article>
            <h3>Méthodologies</h3>
            <h4>Méthode Agile</h4>
            <h4>Programmation orienté objet</h4>
            <h4>Conception de base de données</h4>
        </article>
        <article>
            <h3>Langues</h3>
            <h4>Français - Maternelle</h4>
            <h4>Anglais - Intermédiaire B1</h4>
            <h4>Portugais - Oral maternelle</h4>
        </article>
    </section>


    <section class="interets">
        <h2>Intérêts</h2>
        <article>
            <h3>Musées & Galeries d'arts</h3>
            <h4>Louvre, Galerie Itinerrance, Fondation Louis Vuitton</h4>
        </article>
        <article>
            <h3>Rap français</h3>
            <h4>Hamza, Kekra, Dinos</h4>
        </article>
        <article>
            <h3>Films d'animation</h3>
            <h4>Spider-Man: New Generation, La Passion Van Gogh</h4>
        </article>
    </section>

    <?php include ROOT . '/components/footer.php'; ?> 