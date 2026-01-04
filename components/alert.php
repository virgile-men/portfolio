<?php

if (strpos($_SERVER['SCRIPT_FILENAME'], 'projet')) {
    echo '<div class="mise-en-avant display-project">';
} else {
    echo '<div class="mise-en-avant">';
}

?>
    <p>
        Étudiant en <a href="https://www.etsmtl.ca/etudes/premier-cycle/baccalaureat-genie-logiciel" target="_blank">baccalauréat génie logiciel à l'ETS Montréal<?= file_get_contents(CDNROOT . "/assets/images/logo/external-link.svg"); ?></a>, je suis à la recherche d'un emploi à temps partiel en Web ou développement logiciel.
    </p>
</div>