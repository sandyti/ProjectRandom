<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 0;

    // Menghitung faktorial
    $faktorial = 1;
    for ($i = 1; $i <= $angka; $i++) {
        $faktorial *= $i;
    }

    // Menampilkan hasil
    echo "Faktorial dari $angka adalah $faktorial";
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
