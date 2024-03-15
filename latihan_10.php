<?php
$panjang = 10;
$angka_sebelumnya = 0;
$angka_sekarang = 1;

echo "Deret Fibonacci: ";

for ($i = 0; $i < $panjang; $i++) {
     echo $angka_sebelumnya." ";
     $tambah = $angka_sebelumnya + $angka_sekarang;
     $angka_sebelumnya = $angka_sekarang;
     $angka_sekarang = $tambah;
}
?>