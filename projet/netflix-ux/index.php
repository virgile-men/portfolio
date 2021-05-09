<?php

    $title = "Netflix UX - Virgile Mendes";
    $description = "Dans une projection de projet client pour le module d'infographie de 1ère année MMI, j'ai réalisé en binôme un redesign de l'application desktop de Netflix. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?>

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img id="challengeMedia" src="<?= CDNROOT ?>/assets/images/netflixux-challenge.webp">
            <img id="processusMedia" src="<?= CDNROOT ?>/assets/images/netflixux-processus.webp">
            <iframe id="resultatsMedia" src="https://www.youtube-nocookie.com/embed/uKEzz59YYKk?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>

    <article class="article-project" id="article">

        <section id="intro">
            <h1>Netflix UX</h1>
            <div class="techno">
                <?= file_get_contents(CDNROOT . "/assets/images/logo/xd.svg"); ?>
                <?= file_get_contents(CDNROOT . "/assets/images/logo/photoshop.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/netflixux-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/netflixux-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Dans une projection de projet client pour le module d'infographie de 1ère année MMI, j'ai réalisé en binôme un redesign de l'<strong>application desktop de Netflix</strong>. la problématique était la suivante :  "les utilisateurs sont satisfaits mais commencent à se lasser de l’interface et aimeraient qu’elle soit améliorée ainsi que d’y voir apparaître de nouvelles fonctionnalités". J'ai partagé ce projet avec <a href="https://www.linkedin.com/in/julien-dos-santos-20380a194/" target="_blank" >Julien Dos Santos<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img src="<?= CDNROOT ?>/assets/images/netflixux-challenge.webp">
            <p>Notre nouvelle fonctionnalité : <strong>With my Friends</strong>. Il s'agit d'un tout nouveau système implémenté permettant : d'avoir une liste d'amis, de créer une page de profil public et d'avoir la possibilité de synchroniser la diffusion d'un même programme en temps réel avec son entourage. Toutes ces nouveautés permettent d'apporter une <strong>solution au manque d'interaction interne</strong> à la plateforme entre les utilisateurs.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <img src="<?= CDNROOT ?>/assets/images/netflixux-processus.webp">
            <p>De ce fait, nous avons procédé en 3 parties : <strong>analyse de l'existant</strong>, <strong>ciblage du site</strong> et <strong>conception fonctionnelle</strong>. Pour rester sur la première, nous avons réalisé un <strong>benchmark</strong>, l'<strong>audit ergonomique</strong> du marché ainsi que des <strong>tests utilisateurs</strong>. Nous avons également relevé l'<strong>inventaire des contenus</strong> car nous devions garder la même <strong>charte graphique</strong>.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <iframe id="resultatsMedia" src="https://www.youtube-nocookie.com/embed/uKEzz59YYKk?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <p>Une partie importante de ce projet a été la <strong>réalisation de la maquette</strong>. Pour ce faire, nous avons appris à utiliser Adobe XD pour passer d'un <strong>concept en prototype fonctionnel</strong>. Notre objectif était d’offrir à Netflix un renouveau, de lui <strong>apporter de la fraîcheur</strong>. Depuis ce projet, un concurrent à <strong>intégrer une fonctionnalité similaire à With my Friends</strong> permettant de regarder un programme ensemble à distance.</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciement à&nbsp;<a href="https://fr.linkedin.com/in/robin-llopis" target="_blank">Robin Llopis<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
            <h2 class="redirect-project"><a href="https://www.behance.net/gallery/97169935/Challenge-UX-Redesign-de-Netflix" target="_blank">Voir le projet<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>


    <?php include ROOT . '/components/footer.php'; ?>