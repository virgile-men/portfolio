<?php

    // .htpasswd
    // user : projet
    // pass : moodle

    $title = "Moodle alternatif - Virgile Mendes";
    $description = "Dans le cadre du cours d'analyse et conception de logiciels à l'ETS, notre équipe de 6 étudiants avons réalisé une application front-end d'un système de gestion de l'apprentissage qui ressemble à Moodle utilisé dans une université fictive.";

    // À INCLURE 
    // OUTILS : Git, Plantuml, Typescript, Express, 
    // COURS : Larman, Patrons GoF

    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?> 

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->
            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <!-- <img alt="Illustration du challenge projet" id="challengeMedia" src="<?= CDNROOT ?>/assets/images/moodle-alternatif-challenge.webp">
            <img alt="Illustration du processus du projet" id="processusMedia" src="<?= CDNROOT ?>/assets/images/moodle-alternatif-processus.webp"> -->
            <!-- <iframe id="resultatsMedia" title="<?= $title ?>" src="https://www.youtube-nocookie.com/embed/-----------?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe> -->
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>Moodle alternatif</h1>
            <div class="techno">
                <?= file_get_contents(CDNROOT . "/assets/images/logo/typescript.svg"); ?>
                <?= file_get_contents(CDNROOT . "/assets/images/logo/plantuml.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/moodle-alternatif-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Dans le cadre du cours d'analyse et conception de logiciels à l'ETS, notre équipe de 6 étudiants avons réalisé une application front-end d'un système de gestion de l'apprentissage qui ressemble à Moodle utilisé dans une université fictive. Au sein de ce projet j'ai été <strong>développeur</strong> TypeScript. J'ai partagé ce projet avec Pascal Puttee, Jamal Malti,&nbsp;<a target="_blank" href="https://www.linkedin.com/in/rose-mérel-a26615193/">Rose Mérel<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>,&nbsp;<a target="_blank" href="https://www.linkedin.com/in/loïc-cyr/">Loïc Cyr<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;un autre étudiant.</p>
        <!-- </section> -->

        <!-- <section id="challenge"> Parler du sheet avec tous les fonctionnalités et les étapes par itération -->
            <!-- <h2>Challenge</h2>
            <img alt="Illustration du challenge projet" src="<?= CDNROOT ?>/assets/images/moodle-alternatif-challenge.webp"> -->
            <!-- <p>L'objectif principal était d'offrir le plus de contenu sans que les étudiants MMI se sentent inondés par toutes les possibilités de poursuites d'études imaginables. Ainsi l'idée était que le <strong>scénario utilisateur</strong> se déroule comme un ruissellement de questions qui forme une sélection entre 5 et 15 formations. Nous avions reçu comme consigne qu'il devait s'agir d'un site codé en <strong>PHP</strong> et avec une <strong>base de données MySQL</strong>. Sauf que nous avons commencé le projet au début du second semestre … autrement dit, je n'avais encore <strong>jamais approché le langage PHP</strong> et la conception de bases de données. Il me fallait doit me renseigner sur les possibilités qu'offrent ces derniers et le mettre en place plus tard.</p> -->
        <!-- </section> -->

        <!-- <section id="processus"> Parler des users story avec plantuml -->
            <!-- <h2>Processus</h2>
            <img alt="Illustration du processus du projet" src="<?= CDNROOT ?>/assets/images/moodle-alternatif-processus.webp"> -->
            <!-- <p>Mes principaux outils ont été Git, Google Sheets, PhyMyAdmin et jQuery. Ainsi nous avons constitué <strong>notre propre base de données</strong> partagée sur Google Sheets de <strong>plus de 900 formations</strong>. J'ai découvert l'Open Data de l'Onisep. Grâce à elle, nous avons pu associer des formations à des coordonnées d'universités et d'écoles publiques. J'ai également découvert comme lié du back-end PHP et du front-end Javascript grâce à la <strong>méthode GET</strong> et le <strong>localStorage</strong>.</p> -->
        <!-- </section> -->

        <!-- <section id="resultats">
            <h2>Résultats</h2> -->
            <!-- <iframe title="<?= $title ?>" src="https://www.youtube-nocookie.com/embed/--------?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe> -->
            <!-- <p>Ce projet a été le premier où j'étais <strong>chargé de la gestion du projet</strong> et <strong>développeur</strong> au sein d'un équipe. J’ai aimé comprendre les manières de travail de mes camarades pour <strong>leur confier des activités qu’ils apprécient</strong> ou au moins où ils sont à l’aise et <strong>se sentent utiles</strong>. J'ai beaucoup appris en essayant de trouver les solutions de développement les plus idéales. Grâce à ce site j'ai pu <strong>rentrer en contact des étudiants MMI de toute la France</strong> qui ont apprécié Flowwi ! Aujourd'hui j'aurai plus <strong>optimisé le script Javascript</strong> sans passer par la librairie jQuery et uniquement en Vanilla. J'ai beaucoup aimé lorsque nous sommes passés d'une page web integré d'une maquette à une page web dont <strong>le contenu est généré grâce à une base de donnée</strong>.</p> -->


            <p>Vous pouvez utiliser le courriel cc-yvan.ross@etsmtl.ca et 'professeur' comme mot de passe pour accéder à un compte enseignant.<!-- et first_name.last_name+4@gmail.com pour un compte étudiant. --></p>
        </section>

        <section id="outro">
            <p class="thank">Remerciements à&nbsp;<a href="https://www.linkedin.com/in/yvanross" target="_blank">Yvan Ross<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>, <a href="https://www.linkedin.com/in/vincent-alix-joly-118685238" target="_blank">Vincent Alix-Joly<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;<a href="https://www.linkedin.com/in/davy-castanet-qa-dev" target="_blank">Davy Castanet<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></p>
            <h2 class="redirect-project"><a href="https://moodle-alternatif.virgile.men/" target="_blank">Voir le projet<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>


    <?php include ROOT . '/components/footer.php'; ?>