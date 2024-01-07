<?php
$nombre = 15; // Remplacez ici par le nombre que vous souhaitez tester

if ($nombre % 3 === 0 && $nombre % 5 === 0) {
    echo "Le nombre est à la fois un multiple de 3 et de 5.";
} else {
    echo "Le nombre n'est pas un multiple de 3 et de 5 simultanément.";
}
?>