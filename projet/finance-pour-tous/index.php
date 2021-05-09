<?php

    $title = "Finance pour tous - Virgile Mendes";
    $description = "Dans le cadre du Grand prix de la Finance pour tous 2020, j’ai eu l’idée de créer une page web permettant de visualiser la somme d’une assurance-vie ouverte à la naissance d’un enfant en 2000 le jour de 18e anniversaire. Découvrez toutes les étapes de mon travail !";


    include '../../components/constants.php';

    include ROOT . '/components/head.php';

?>

<body>

    <?php include ROOT . '/components/header.php'; ?> 

    <div id="medias-fixed">

        <div class="medias flex-center">
            <!-- Play à partir de Javascript -->

            <video preload="none" class="media-actived" id="introMedia" loop muted autoplay>
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <img alt="Illustration du challenge projet" id="challengeMedia" src="<?= CDNROOT ?>/assets/images/financepourtous-challenge.webp">
            <img class="financepurtous-processus" id="processusMedia" src="<?= CDNROOT ?>/assets/images/financepourtous-processus.webp">
            <iframe id="resultatsMedia" title="<?= $title ?>" src="https://www.youtube-nocookie.com/embed/UeOmyfhDmHY?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            
        </div>

        <?php include ROOT . '/components/alert.php'; ?> 
    </div>

    <main class="display-projet flex-center">

    <div>
        <!-- Zone libre afficher les medias desktop -->
    </div>


    <article class="article-project" id="article">

        <section id="intro">
            <h1>Finance pour tous</h1>
            <div class="techno">
                <?php echo file_get_contents(CDNROOT . "/assets/images/logo/javascript.svg"); ?>
                <?php echo file_get_contents(CDNROOT . "/assets/images/logo/css.svg"); ?>
            </div>
            <video preload="none" loop muted controls playsinline poster="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webp">
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.mp4"
                        type="video/mp4">
                <source src="<?= CDNROOT ?>/assets/videos/financepourtous-intro.webm"
                        type="video/webm">
                Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
            </video>
            <p>Dans le cadre du <a target="_blank" href="https://www.lafinancepourtous.com/qui-sommes-nous/grand-prix-de-la-finance-pour-tous/grand-prix-2020/">Grand prix de la Finance pour tous 2020<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>, j’ai eu l’idée de créer une page web permettant de visualiser la somme d’une assurance-vie ouverte à la naissance d’un enfant en 2000 le jour de 18e anniversaire.</p>
        </section>

        <section id="challenge">
            <h2>Challenge</h2>
            <img alt="Illustration du challenge projet" src="<?= CDNROOT ?>/assets/images/financepourtous-challenge.webp">
            <p>L’objectif est que selon les montants par mois et par anniversaires que l’utilisateur souhaite verser, il obtienne le <strong>total net d’impôt</strong> après dix-huit années complètes et également qui voit grâce à <strong>différents paliers</strong> ce que cela représente. Il peut également personnaliser la <strong>répartition entre fond euros et fond en unités de comptes</strong> ainsi qu’ajuster les <strong>frais de souscription et de gestion</strong>.</p>
        </section>

        <section id="processus">
            <h2>Processus</h2>
            <img alt="Illustration du processus du projet"class="financepurtous-processus" src="<?= CDNROOT ?>/assets/images/financepourtous-processus.webp">
            <p>En plus du total, j'ai cherché à illustrer ce que cela représente avec des paliers. J’ai choisi des achats ou des activités originales : 1 m<sup>2</sup> à Paris, se produire à l'Olympia, un vol dans l'espace … Pour le thème du site, je voulais faire une <strong>interface dans la tendance Neumorphism</strong>. Ce style graphique se définit en donnant du réalisme aux éléments d’une interface.</p>
        </section>

        <section id="resultats">
            <h2>Résultats</h2>
            <iframe title="<?= $title ?>" src="https://www.youtube-nocookie.com/embed/UeOmyfhDmHY?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&color=white&disablekb=1&playsinline=1"width="1920" height="1080" frameborder="0"></iframe>
            <p>L'ensemble de mon travail de recherche est sourcé dans un article sur Medium. Lorsque que je l'ai fait, j'étais encore <strong>novice en Javascript</strong> et même en CSS mais le résultat ne le reflète pas (du moins j'espère 😅). Même si je n'ai pas gagné, j'ai été parmi les finalistes et j'ai aimé me challenger dans l'univers de la finance !</p>
        </section>

        <section id="outro">
            <p class="thank">Remerciements à Stephane N et <a href="https://iconix.si/" target="_blank">Gregor Cresnar<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>.</p>
            <h2 class="redirect-project"><a href="https://virgile-men.github.io/lafinancepourtous-2020/" target="_blank">Voir le projet<?php echo file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a></h2>
        </section>


    </article>

    </main>

    <?php include ROOT . '/components/footer.php'; ?>