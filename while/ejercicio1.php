<?php
/* Obtener suma de los términos de la serie: 2, 5, 7, 10, 12, 15, 17, .... 1800. */

$last_sum = 2;
$num = 2;
while ($num <= 1800) {
    echo $num .", ";
    if ($last_sum == 2) {
        $num += 3;
        $last_sum = 3;
    } else {
        $num += 2;
        $last_sum = 2;
    }
}
?>