<?php
$angka = 12345;
$jumlah_digit = 0;

while ($angka != 0) {
    $angka = floor($angka / 10);
    $jumlah_digit++;
}
echo "Jumlah digit: $jumlah_digit";

?>