<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $input_angka = isset($_POST['angka']) ? $_POST['angka'] : '';
    
    // Mengubah string angka menjadi array
    $angka = array_map('intval', explode(',', $input_angka));

    // Fungsi untuk menghitung rata-rata array
    function rata_rata($arr) {
        $total = array_sum($arr);
        $count = count($arr);
        return $total / $count;
    }

    // Menampilkan hasil
    echo "Rata-rata: " . rata_rata($angka);
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
