<?php
echo "Entrez le rayon du cercle : ";
$rayon = floatval(readline());

$diametre = 2 * $rayon;
$perimetre = 2 * pi() * $rayon;
$surface = pi() * pow($rayon, 2);

echo "Le diamètre du cercle est : $diametre\n";
echo "Le périmètre du cercle est : $perimetre\n";
echo "La surface du cercle est : $surface\n";
?>