<?php
function sinus_angle($angle, $unite = "radian") {
    // Conversion de l'angle en radians si nécessaire
    switch ($unite) {
        case "radian":
            $angle_en_radians = $angle;
            break;
        case "degre":
            $angle_en_radians = deg2rad($angle);
            break;
        case "grade":
            $angle_en_radians = deg2rad(($angle * 9) / 10);
            break;
        default:
            return "Unité non reconnue";
    }

    // Calcul du sinus de l'angle en radians
    $sinus = sin($angle_en_radians);
    return $sinus;
}

// Exemples d'utilisation :
$angle_radian = 1.2;
$angle_degre = 45;
$angle_grade = 50;

echo "Sinus en radians: " . sinus_angle($angle_radian) . "\n";
echo "Sinus en degrés: " . sinus_angle($angle_degre, "degre") . "\n";
echo "Sinus en grades: " . sinus_angle($angle_grade, "grade") . "\n";

?>