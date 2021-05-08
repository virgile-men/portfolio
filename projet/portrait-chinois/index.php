<?php

    $title = "Portrait-chinois - Virgile Mendes";
    $description = "Lors du second semestre de mon DUT Métiers du Multimédia et de l’Internet à Champ-sur-Marne, il  m’a été demandé de conceptualiser et réaliser un portrait chinois interactif à travers sept thèmes. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?>

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Affichage à partir d'app.js -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img class="portraitchinois-challenge" id="challengeMedia" src="<?= CDNROOT ?>/assets/images/portraitchinois-challenge.png">
            <video preload="none" id="processusMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-processus.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-processus.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <iframe id="resultatsMedia" src="https://www.youtube-nocookie.com/embed/tVC7CzfgDy8?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>Portrait-chinois</h1>
            <div class="techno">
                <?php echo file_get_contents(CDNROOT . "/assets/images/logo/css.svg"); ?>
                <?php echo file_get_contents(CDNROOT . "/assets/images/logo/javascript.svg"); ?>
                <?php echo file_get_contents(CDNROOT . "/assets/images/logo/photoshop.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Lors du second semestre de mon DUT Métiers du Multimédia et de l’Internet à Champ-sur-Marne, il  m’a été demandé de <strong>conceptualiser</strong> et <strong>réaliser</strong> un portrait chinois interactif à travers sept thèmes. J'ai pu faire découvrir certains aspects de ma personnalité, mon caractère et mes goûts.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img class="portraitchinois-challenge" src="<?= CDNROOT ?>/assets/images/portraitchinois-challenge.png">
            <p>Le concept a été de présenter <strong>les thèmes comme des œuvres</strong>. De cette idée, j'ai choisi de donner l'<strong>illusion de faire léviter mes textes et mes illustrations</strong> dans le décor de COLORS, une plateforme d’interprétation musicale à l'aspect minimaliste. En travaillant sur Photoshop, j'ai pu <strong>extraire l'environnement sans les couleurs</strong> et ainsi y associer mes ambiances.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/portraitchinois-processus.webp">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-processus.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/portraitchinois-processus.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Comme je disais, j'ai donné l'illusion de lévitation des mes textes et mes illustrations. En effet, j'ai perfectionné mon portrait chinois grâce à des <strong>légères animations de navigatio</strong> qui, selon moi, font toute la différence ! Dans un même temps, j'ai réalisé un <strong>menu de navigation verticale</strong> pour permettre la prévisualisation de chaque thème comme un tableau d'art.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <iframe src="https://www.youtube-nocookie.com/embed/tVC7CzfgDy8?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <p>Ce projet a été mon <strong>premier site web</strong> qui me représentait. J'ai voulu le rendre autant accessible sur ordinateur que sur téléphone. J'ai été fier de le montrer à mes proches mais également à toute personne lors de déplacement.</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciement à&nbsp;<a href="https://fr.linkedin.com/in/ga%C3%ABlle-charpentier-10783a45" target="_blank">Gaëlle Charpentier<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>&nbsp;et&nbsp;<a href="https://fr.linkedin.com/in/robin-llopis" target="_blank">Robin Llopis<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></p>
            <h2 class="redirect-project"><a href="https://virgile-men.github.io/portrait-chinois/" target="_blank">Voir le projet<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>


    <?php include ROOT . '/components/footer.php'; ?>