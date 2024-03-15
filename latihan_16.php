<?php
function rata_rata($arr) {
    $total = 0;
    $count = count($arr);
    foreach ($arr as $nilai) {
        $total += $nilai;
    }
    return $total / $count;
}

$angka = [10, 20, 30, 40, 50];
echo "Rata-rata: " . rata_rata($angka);

?>