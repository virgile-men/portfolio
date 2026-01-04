<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- PRECONNECT -->
    <link rel="preconnect" href="https://unpkg.com/">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <title><?= $title ?></title>
    <link rel='icon' href='<?= CDNROOT ?>/favicon.ico'>


    <!-- META -->
    <link rel=”canonical” href="<?= WEBROOT ?>">
    <meta name="description" content="<?= $description ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= CDNROOT ?>/assets/images/virgile-men-card.jpg">
    <meta property="og:url" content="<?= WEBROOT ?>">
    <meta property="og:site_name" content="Virgile Mendes - Développeur full-stack">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= WEBROOT ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $description ?>">
    <meta name="twitter:image" content="<?= CDNROOT ?>/assets/images/virgile-men-card.jpg">
    <meta name="twitter:image:alt" content="Logo et memoji de Virgile Mendes">


    <!-- CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

<?php if(strpos($_SERVER['PHP_SELF'], "projet") !== false){ // Teste la page (projet ou accueil) et charge la librairie nécessaire ?>
    <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
<?php } else { ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php } ?>


    <!-- CSS -->
    <link rel="stylesheet" href="<?= CDNROOT ?>/assets/styles/style.css">
    <link rel="stylesheet" href="<?= CDNROOT ?>/assets/styles/responsive.css">
    <link rel="stylesheet" href="<?= CDNROOT ?>/assets/styles/animation.css">

    <!-- JS -->
    <script src="<?= CDNROOT ?>/assets/scripts/app.js"></script>

    

</head>