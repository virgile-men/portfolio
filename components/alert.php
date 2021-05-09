<?php

if (strpos($_SERVER['SCRIPT_FILENAME'], 'projet') == true) {
    echo '<div class="mise-en-avant display-project">';
} else {
    echo '<div class="mise-en-avant">';
}

?>
    <p>
        Étudiant MMI passionné et aimant les défis,<br>
        je participe au festival MMI 2021 dans la catégorie Web !<br>
        <a href="https://www.festival2021.iutmmi.fr/2021.en-competition.253_fdf.html?var=cat&ch=all" target="_blank">Clique ici pour me soutenir<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>
    </p>
</div>