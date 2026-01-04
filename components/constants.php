<?php

// La constante ROOT est le chemin vers la racine Serveur du projet
// La constante WEBROOT est le chemin vers la racine Web du projet
// La constante CDNROOT est le chemin vers la racine CDN du projet

if ($_SERVER['SERVER_NAME'] == "virgile.men") {
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    define('WEBROOT','https://virgile.men');
    //Cloudflare s'occupe déjà de cache les fiches /assets/
    define('CDNROOT','https://virgile.men');
} else {
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/virgile-men');
    define('WEBROOT','http://' . $_SERVER['SERVER_NAME'] . '/virgile-men');
    define('CDNROOT','http://' . $_SERVER['SERVER_NAME'] . '/virgile-men');
}

?>