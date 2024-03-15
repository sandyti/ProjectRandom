<?php
if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];
    $jumlah_digit = 0;

    $angka_temp = $angka;
    while ($angka_temp != 0) {
        $angka_temp = floor($angka_temp / 10);
        $jumlah_digit++;
    }

    echo "Angka yang dimasukkan: $angka <br>";
    echo "Jumlah digit: $jumlah_digit";
} else {
    echo "Masukkan angka terlebih dahulu.";
}
?>
