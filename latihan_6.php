<?php
$kode_menu = 'B';

switch ($kode_menu) {

case 'A':
    echo "Harga makanan: Rp. 20.000";
    break;

case 'B':
    echo "Harga makanan: Rp. 25.000";
    break;

case 'C':
    echo "Harga makanan: Rp. 30.000";
    break;
default:
    echo "Menu tidak tersedia";
}
?>