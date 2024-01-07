<?php
function majuscule_premier_caractere(array &$tab_chaines) {
    foreach ($tab_chaines as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
    unset($chaine); // Dissocie la dernière référence
}

// Exemple d'utilisation :
$chaines = ["exEMplE", "TEst", "aBcDe"];
majuscule_premier_caractere($chaines);
print_r($chaines); // Affichera : Array ( [0] => Exemple [1] => Test [2] => Abcde )
?>