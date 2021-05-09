<?php

    $title = "Nike Paris On Air - Virgile Mendes";
    $description = "Pour le Air Max Day 2018, Nike a organisé à la Cité de la Mode et du Design : le Paris On Air. Après un présélection des 150 meilleurs concepts sur 2500 inscrits, la marque a encadré des ateliers créatifs afin de désigner un modèle à l’image du Grand Paris. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?>

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img alt="Illustration du challenge projet" id="challengeMedia" src="<?= CDNROOT ?>/assets/images/nikeonair-challenge.webp">
            <iframe id="processusMedia" src="https://www.youtube-nocookie.com/embed/dXVh_IL4qtI?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <img alt="Illustration du résultat du projet" id="resultatsMedia" src="<?= CDNROOT ?>/assets/images/nikeonair-resultats.webp">
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>Nike Paris On Air</h1>
            <div class="techno">
                <?= file_get_contents(CDNROOT . "/assets/images/logo/photoshop.svg"); ?>
                <?= file_get_contents(CDNROOT . "/assets/images/logo/illustrator.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/nikeonair-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Pour le Air Max Day 2018, Nike a organisé à la Cité de la Mode et du Design : le Paris On Air. Après un <strong>présélection des 150 meilleurs concepts</strong> sur 2500 inscrits, la marque a encadré des <strong>ateliers créatifs</strong> afin de désigner un modèle à l’image du Grand Paris. L’événement était mondial puisqu’il a également eu lieu dans 5 autres métropoles internationales.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img alt="Illustration du challenge projet" src="<?= CDNROOT ?>/assets/images/nikeonair-challenge.webp">
            <p>Pour ma candidature, j’ai conceptualisé cette paire : du vert émeraude ; des touches de velours rouge et de dorée ; les renforts en ton pierre. J'ai été très inspiré pour la réaliser : les édicules des stations du métro, l'architecture haussmannienne, les barres d'immeubles, l'Olympia, l’Opéra Garnier, … Grâce à ce concept, <strong>j'ai été présélectionné par Nike</strong> pour accéder aux ateliers.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <iframe title="<?= $title ?>" src="https://www.youtube-nocookie.com/embed/dXVh_IL4qtI?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <p>Pendant ma session, on nous informe qu’il y a des modèles imposés. Je choisis la Air Max 98, <strong>année du sacré français à Saint-Denis</strong>. Pendant 2 heures, nous devions créer sa planche avec le plus d’informations possibles avec les couleurs, le choix des matières, les inspirations, etc. J’ai trouvé ça stressant mais j’ai <strong>adoré l’ambiance qui régnait</strong> avec des <strong>designers de Nike qui nous conseillaient</strong>.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <img alt="Illustration du résultat du projet" src="<?= CDNROOT ?>/assets/images/nikeonair-resultats.webp">
            <p>Bien après l’événement, je trouvais que <strong>ma planche n’était pas finie</strong>. J’ai donc réalisé grâce à Photoshop une <strong>simulation photographique</strong> de ce que mon modèle final devait rendre. Cette expérience m’a énormément plu. C’était mon premier concours où je devais <strong>partager ma créativité</strong> et j'ai été très enthousiaste d'<strong>exprimer ma vision du Grand Paris</strong>.</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciement à Baptiste M.</p>
            <h2 class="redirect-project"><a href="https://www.youtube.com/watch?v=xYukVnteLBU" target="_blank">Voir le reportage<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>


    <?php include ROOT . '/components/footer.php'; ?>