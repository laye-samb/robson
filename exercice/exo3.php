boucle while
<?php
$nombreInitial = 456; 
$nombreTire = 0;
$coupsRealises = 0;

while ($nombreTire !== $nombreInitial) {
    $nombreTire = rand(100, 999); 
    $coupsRealises++;
}

echo "Nombre de coups nécessaires avec la boucle while : $coupsRealises";
?>
boucle for
<?php
$nombreInitial = 456;
$nombreTire = 0;
$coupsRealises = 0;

for ($coupsRealises = 0; $nombreTire !== $nombreInitial; $coupsRealises++) {
    $nombreTire = rand(100, 999);
}

echo "Nombre de coups nécessaires avec la boucle for : $coupsRealises";
?>