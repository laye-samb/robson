<?php
$keys = array_keys($tableauExercice9);
$index = 0;
while ($index < count($tableauExercice9)) {
    $nom = $keys[$index];
    $infos = $tableauExercice9[$nom];
    echo "Nom: " . $nom . ", Prénom: " . $infos['prenom'] . ", Ville: " . $infos['ville'] . ", Âge: " . $infos['age'] . "<br>";
    $index++;
}
?>