<?php

    $title = "Virgile Mendes - Développeur full-stack";
    $description = "Découvrez une sélection de mes projets créatif en développement web et design numérique ainsi que mon parcous, mes compétences et mes expériences";


    include './components/constants.php';

    include './components/head.php';

?>
<body>
    
    <?php include './components/header.php'; ?>

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
            <!-- <video preload="none" id="moodle-alternatif" loop muted>
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video> -->
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

	  <?php // include ROOT . '/components/alert.php'; ?> 

        <section class="projets">
            <h2>Sélection de projets</h2>
            <ul>
                <li><a href="<?= WEBROOT ?>/projet/portrait-chinois/" data-project="portrait-chinois">Portrait-chinois</a></li>
                <li><a href="<?= WEBROOT ?>/projet/flowwi/" data-project="flowwi">Flowwi</a></li>
                <!-- <li><a href="<?= WEBROOT ?>/projet/moodle-alternatif/" data-project="moodle-alternatif">Moodle alternatif</a></li> -->
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
                    <img alt="Image de présentation de Portrait-chinois" src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webp">
                    <h3 class="title-project">Portrait-chinois</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/flowwi/">
                    <img alt="Image de présentation de Flowwi" src="<?= CDNROOT ?>/assets/videos/flowwi-intro.webp">
                    <h3 class="title-project">Flowwi</h3>
                </a>
            </div>
            <!-- <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/moodle-alternatif/">
                    <img alt="Image de présentation de Moodle alternatif" src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.webp">
                    <h3 class="title-project filter-invert">Moodle alternatif</h3>
                </a>
            </div> -->
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/netflix-ux/">
                    <img alt="Image de présentation de Netflix UX" src="<?= CDNROOT ?>/assets/videos/netflixux-intro.webp">
                    <h3 class="title-project">Netflix UX</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/finance-pour-tous/">
                    <img alt="Image de présentation de Finance pour tous" src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webp">
                    <h3 class="title-project filter-invert">Finance pour tous</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/nike-paris-on-air/">
                    <img alt="Image de présentation de Nike Paris On Air" src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webp">
                    <h3 class="title-project filter-invert">Nike Paris On Air</h3>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= WEBROOT ?>/projet/mmi-sland/">
                    <img alt="Image de présentation de MMi'SLAND" src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webp">
                    <h3 class="title-project">MMi'SLAND</h3>
                </a>
            </div>
        </div>
      </div>

    <section class="etudes">
        <h2>Études</h2>
        <article>
            <h3>Baccalauréat Génie logiciel</h3>
            <h4>École de technologie supérieure</h4>
            <h4>Sept. 2021 - Aujourd'hui</h4>
            <p>Grâce à un programme universitaire et des expériences en milieu professionnel, je me forme aux postes de concepteur logiciel et responsable de développement.</p>
        </article>
        <article>
            <h3>DUT Métiers du Multimédia et de l'Internet (équivalent DEC)</h3>
            <h4>Université Gustave Eiffel</h4>
            <h4>Sept. 2019 - Juin 2021</h4>
            <p>Cursus sur les métiers du web, du développement back-end, à l’UX Design, en passant par le webmarketing ou la réalisation de produits audiovisuels.</p>
        </article>
        <article>
            <h3>Baccalauréat Économique et Social (équivalent DES)</h3>
            <h4>Lycée La Salle</h4>
            <h4>Sept. 2017 - Juin 2019</h4>
            <p>Les principales matières sont les sciences sociales, l'économie et les mathématiques. Lorsque j'ai passé l'examen, j'ai suivi l'option "Histoire de l'art".</p>
        </article>
    </section>





    <section class="experiences">
        <h2>Expériences</h2>
        <article>
            <h3>Développeur Fullstack</h3>
            <h4>Solution ISIOS</h4>
            <h4>Janvier 2023 - Aujourd'hui</h4>
            <p>Conçue pour répondre aux besoins des gestionnaires de cabinets d’ingénieurs, d’architectes, d’entreprises privées ou publiques, Solution ISIOS offre des services en gestion de projets, dont une application SaaS supportée par une équipe de développement logiciel.</p>
        </article>
        <article>
            <h3>Programmeur .NET</h3>
            <h4>Desjardins</h4>
            <h4>Avril 2022 - Décembre 2022</h4>
            <p>Au sein de la coopérative financière Desjardins, je participe à la maintenance et l'amélioration d'une application de traitements mathématiques pour calculer la distribution de coupon et de paiement des paniers de fonds de placement.</p>
        </article>
        <article>
            <h3>Développeur Prestashop</h3>
            <h4>E-Smoke</h4>
            <h4>Avril 2021 - Juillet 2021</h4>
            <p>Spécialisé dans le sevrage tabagique grâce au vapotage, E-Smoke compte 10 boutiques. En quête du marché internet, j'ai développé un site de commerce en ligne sous Prestashop (avec des règles CSS et animations JavaScript personnalisées).</p>
        </article>
    </section>




    <section class="competences">
        <h2>Compétences</h2>
        <article>
            <h3>Développement Front-end</h3>
            <h4>HTML / CSS / Javascript ES6</h4>
            <h4>jQuery / Bootstrap</h4>
            <h4>TypeScript / React</h4>
        </article>


        <article>
            <h3>Développement Back-end</h3>
            <h4>PHP / Modèle MVC</h4>
            <h4>MySQL / NoSQL</h4>
            <h4>NodeJS / ExpressJS</h4>
            <h4>PhpMyAdmin / MongoDB</h4>
        </article>


        <article>
            <h3>Développement logiciel</h3>
            <h4>Java / Maven</h4>
            <h4>C# .NET / Http Agility Pack / EPPlus</h4>
            <h4>Playwright</h4>
            <h4>Tests unitaire, d'acceptation et système</h4>
        </article>


        <article>
            <h3>Gestion de projets</h3>
            <h4>Méthode Agile</h4>
            <h4>Confluence / Trello / Teams</h4>
            <h4>Diagramme de Gantt</h4>
        </article>

        <article>
            <h3>Design</h3>
            <h4>Figma / Adobe XD</h4>
            <h4>Photoshop / Illustrator</h4>
            <h4>After Effect / Premiere Pro</h4>
        </article>


        <article>
            <h3>Langues</h3>
            <h4>Français - Natale</h4>
            <h4>Anglais - Intermédiaire</h4>
            <h4>Portugais - Oral natale</h4>
        </article>

        <article>
            <h3>Outils</h3>
            <h4>Git / Github / Gitlab</h4>
            <h4>Google Workspace / Microsoft Office</h4>
            <h4>Wordpress / Divi / Elementor</h4>
            <h4>Prestashop / Woocommerce</h4>
        </article>

        <article>
            <h3>Conventions & Architectures</h3>
            <h4>Conception de base de données</h4>
            <h4>Patrons de conception GoF</h4>
            <h4>Principes GRASP</h4>
        </article>

    </section>


    <section class="interets">
        <h2>Intérêts</h2>
        <article>
            <h3>Musées & Galeries d'arts</h3>
            <h4>Louvre, Galerie Itinerrance, Fondation Louis Vuitton</h4>
        </article>
        <article>
            <h3>Passions suivi hebdomadairement</h3>
            <h4>Formule 1, Star Wars, Rap français</h4>
        </article>
        <article>
            <h3>Films d'animation</h3>
            <h4>Spider-Man: New Generation, La Passion Van Gogh, Le Chat Potté 2</h4>
        </article>
    </section>

    <?php include ROOT . '/components/footer.php'; ?> 