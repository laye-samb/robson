<?php
echo "Entrez un nombre : ";
$nombre = intval(readline());

$sumDiviseurs = 0;
for ($i = 1; $i < $nombre; $i++) {
    if ($nombre % $i === 0) {
        $sumDiviseurs += $i;
    }
}

if ($sumDiviseurs === $nombre) {
    echo "$nombre est un nombre parfait.";
} else {
    echo "$nombre n'est pas un nombre parfait.";
}
?>