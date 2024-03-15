<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 0;

    // Menghitung jumlah digit
    $jumlah_digit = 0;
    while ($angka != 0) {
        $angka = floor($angka / 10);
        $jumlah_digit++;
    }

    // Menampilkan hasil
    echo "Jumlah digit: $jumlah_digit";
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
