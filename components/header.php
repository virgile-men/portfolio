<?php

if (strpos($_SERVER['SCRIPT_FILENAME'], 'projet') == true) {
    echo '<header class="header-desktop-fixed" >';
} else {
    echo '<header>';
}

?>

    <nav>
        <h1><a href="<?= WEBROOT ?>">Virgile Mendes</a><span> - Développeur full-stack</span></h1>
        <a href="mailto:contact@virgile.men">Contact</a>
    </nav>
</header>