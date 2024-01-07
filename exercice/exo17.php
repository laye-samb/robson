<?php
function afficher_tableau_xhtml($tableau) {
    echo "<table border='1'>";
    foreach ($tableau as $cle => $valeur) {
        echo "<tr><th>$cle</th><td>";
        if (is_array($valeur)) {
            afficher_tableau_xhtml($valeur);
        } else {
            echo $valeur;
        }
        echo "</td></tr>";
    }
    echo "</table>";
}

// Exemple d'utilisation :
$mon_tableau = array(
    "Premier" => array("Un", "Deux"),
    "Second" => array("Trois", "Quatre")
);

afficher_tableau_xhtml($mon_tableau);
?>