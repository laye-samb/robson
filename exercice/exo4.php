<?php
function trouverPGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function trouverPPCM($a, $b) {
    return ($a * $b) / trouverPGCD($a, $b);
}

echo "Entrez le premier entier : ";
$a = intval(readline());
echo "Entrez le deuxième entier : ";
$b = intval(readline());

$ppcm = trouverPPCM($a, $b);
echo "Le PPCM de $a et $b est : $ppcm";
?>