<?php
function urutkan($arr) {
    sort($arr);
    return $arr;
}
    
$angka = [5, 3, 8, 1, 2];
$angka_urut = urutkan($angka);
echo "Array setelah diurutkan: " . implode(", ", $angka_urut);
?>