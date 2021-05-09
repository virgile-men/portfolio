<?php

    $title = "Flowwi - Virgile Mendes";
    $description = "Flowwi est une plateforme web référençant près de 900 formations allant de Bac +3 à Bac +5 en lien avec le DUT Métiers du Multimédia et de l'Internet. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?> 

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img id="challengeMedia" src="<?= CDNROOT ?>/assets/images/flowwi-challenge.webp">
            <img id="processusMedia" src="<?= CDNROOT ?>/assets/images/flowwi-processus.webp">
            <iframe id="resultatsMedia" src="https://www.youtube-nocookie.com/embed/5_6J7Eosj7E?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>Flowwi</h1>
            <div class="techno">
                <?= file_get_contents(CDNROOT . "/assets/images/logo/php.svg"); ?>
                <?= file_get_contents(CDNROOT . "/assets/images/logo/javascript.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/flowwi-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/flowwi-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Flowwi est une plateforme web référençant près de 900 formations allant de Bac +3 à Bac +5 en lien avec le DUT Métiers du Multimédia et de l'Internet. Ce site a été le fruit du projet tutoré de 1ère année de DUT MMI. Au sein de ce projet, j'ai été <strong>chef de projet</strong> et <strong>développeur</strong> PHP/MySQL et Javascript. J'ai partagé ce projet avec <a target="_blank" href="https://www.linkedin.com/in/m%C3%A9lodie-chan-789942195/">Mélodie Chan<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;<a target="_blank" href="https://www.linkedin.com/in/thibault-paulard-040530194">Thibault Paulard<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img src="<?= CDNROOT ?>/assets/images/flowwi-challenge.webp">
            <p>L'objectif principal était d'offrir le plus de contenu sans que les étudiants MMI se sentent inondés par toutes les possibilités de poursuites d'études imaginables. Ainsi l'idée était que le <strong>scénario utilisateur</strong> se déroule comme un ruissellement de questions qui forme une sélection entre 5 et 15 formations. Nous avions reçu comme consigne qu'il devait s'agir d'un site codé en <strong>PHP</strong> et avec une <strong>base de données MySQL</strong>. Sauf que nous avons commencé le projet au début du second semestre … autrement dit, je n'avais encore <strong>jamais approché le langage PHP</strong> et la conception de bases de données. Il me fallait doit me renseigner sur les possibilités qu'offrent ces derniers et le mettre en place plus tard.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <img src="<?= CDNROOT ?>/assets/images/flowwi-processus.webp">
            <p>Mes principaux outils ont été Git, Google Sheets, PhyMyAdmin et jQuery. Ainsi nous avons constitué <strong>notre propre base de données</strong> partagée sur Google Sheets de <strong>plus de 900 formations</strong>. J'ai découvert l'Open Data de l'Onisep. Grâce à elle, nous avons pu associer des formations à des coordonnées d'universités et d'écoles publiques. J'ai également découvert comme lié du back-end PHP et du front-end Javascript grâce à la <strong>méthode GET</strong> et le <strong>localStorage</strong>.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <iframe src="https://www.youtube-nocookie.com/embed/5_6J7Eosj7E?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <p>Ce projet a été le premier où j'étais <strong>chargé de la gestion du projet</strong> et <strong>développeur</strong> au sein d'un équipe. J’ai aimé comprendre les manières de travail de mes camarades pour <strong>leur confier des activités qu’ils apprécient</strong> ou au moins où ils sont à l’aise et <strong>se sentent utiles</strong>. J'ai beaucoup appris en essayant de trouver les solutions de développement les plus idéales. Grâce à ce site j'ai pu <strong>rentrer en contact des étudiants MMI de toute la France</strong> qui ont apprécié Flowwi ! Aujourd'hui j'aurai plus <strong>optimisé le script Javascript</strong> sans passer par la librairie jQuery et uniquement en Vanilla. J'ai beaucoup aimé lorsque nous sommes passés d'une page web integré d'une maquette à une page web dont <strong>le contenu est généré grâce à une base de donnée</strong>.</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciement à&nbsp;<a href="https://www.linkedin.com/in/philippe-gambette-88759153" target="_blank">Philippe Gambette<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;<a href="https://www.linkedin.com/in/alexandre-ferraille-69116889/" target="_blank">Alexandre Ferraille<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></p>
            <h2 class="redirect-project"><a href="https://flowwi.fr/" target="_blank">Voir le projet<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>


    <?php include ROOT . '/components/footer.php'; ?>