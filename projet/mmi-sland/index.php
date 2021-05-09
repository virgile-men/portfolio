<?php

    $title = "MMi'SLAND - Virgile Mendes";
    $description = "MMi'SLAND est une campagne promotionnelle de la formation Métiers du Multimédia et de l'Internet à Champs-sur-Marne pour la journée porte-ouverte de l'Université Gustave Eiffel 2021. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?>

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img alt="Illustration du challenge projet" id="challengeMedia" src="<?= CDNROOT ?>/assets/images/mmisland-challenge.webp">
            <img alt="Illustration du processus du projet" id="processusMedia" src="<?= CDNROOT ?>/assets/images/mmisland-processus.webp">
            <video preload="none" id="resultatsMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>MMi'SLAND</h1>
            <div class="techno">
                <?= file_get_contents(CDNROOT . "/assets/images/logo/photoshop.svg"); ?>
                <?= file_get_contents(CDNROOT . "/assets/images/logo/illustrator.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webp">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>MMi'SLAND est une campagne promotionnelle de la formation Métiers du Multimédia et de l'Internet à Champs-sur-Marne pour la journée porte-ouverte de l'Université Gustave Eiffel 2021. Le but a été de <strong>montrer la créativité et la polyvalence</strong> de la formation grâce à une direction artistique représentant la formation MMI comme une <strong>carte d'îles thématisées</strong>. Au sein de ce projet, j'ai été chargé de la <strong>direction artistique</strong> et <strong>graphiste des produits dérivés</strong> de l'affiche ainsi que des mockup du site web. J'ai partagé ce projet avec <a href="https://www.linkedin.com/in/m%C3%A9lodie-chan-789942195/" target="_blank" >Mélodie Chan<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;<a href="https://www.linkedin.com/in/jean-nicanor-bastien/" target="_blank" >Jean Nicanor Bastien<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img alt="Illustration du challenge projet"class="mmisland-challenge" src="<?= CDNROOT ?>/assets/images/mmisland-challenge.webp">
            <p>L'idée originale était de <strong>créer un parc d'attractions des différents domaines</strong> de la formation. Le but étant de mettre en avant <strong>la localisation proche de Disneyland</strong> et également de représenter la créativité et la polyvance de la formation par une <strong>pluralité d'univers réunis à un seul endroit</strong>.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <img alt="Illustration du processus du projet" src="<?= CDNROOT ?>/assets/images/mmisland-processus.webp">
            <p>En tant que graphiste, j'ai principalement utilisé Photoshop et Illustrator. Me basant sur l'affiche de Mélodie j'ai réalisé une série de goodies en utilisant des mock-up de masque et de portes-clés. En gardant toujours en tête l'idée originale, j'ai réalisé des billets d'entrées comme pour un parc d'attraction. Pour la maquette de Jean Nicanor, j'ai réalisé des <strong>mock-up 3D</strong> de mobile et ordinateur. Ces derniers mettent en avant la <strong>modernité du site</strong>. En manipulant les mock-up 3D, j'ai découvert une nouvelle manière de créer des projets Photoshop grâce aux <strong>textures</strong> et à la <strong>simulation de lumière</strong>.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webp">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/mmisland-intro-resultats.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Ce projet m'a permis de renforcer mes <strong>compétences en graphisme</strong>. J'ai progressé dans mon utilisation de Photoshop avec des rendus dont je suis <strong>vraiment fier</strong>. Notre campagne a été <strong>retenu par l'équipe pédagogique</strong> pour la journée porte-ouverte virtuelle de la formation.</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciement à&nbsp;<a href="https://www.linkedin.com/in/fredfishdesign/" target="_blank">Frédéric Poisson<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
            <h2 class="redirect-project"><a href="https://www.behance.net/gallery/111858447/MMiSLAND" target="_blank">Voir le projet<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>

    <?php include ROOT . '/components/footer.php'; ?>