<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai panjang dari form
    $panjang = isset($_POST['panjang']) ? intval($_POST['panjang']) : 0;

    // Inisialisasi angka awal deret Fibonacci
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;

    // Menampilkan deret Fibonacci
    echo "Deret Fibonacci: ";
    for ($i = 0; $i < $panjang; $i++) {
        echo $angka_sebelumnya . " ";
        $tambah = $angka_sebelumnya + $angka_sekarang;
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $tambah;
    }
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
