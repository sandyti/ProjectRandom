<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $input_angka = isset($_POST['angka']) ? $_POST['angka'] : '';
    
    // Mengubah string angka menjadi array
    $angka = array_map('intval', explode(',', $input_angka));

    // Fungsi untuk mengurutkan array
    function urutkan($arr) {
        sort($arr);
        return $arr;
    }

    // Menampilkan hasil
    $angka_urut = urutkan($angka);
    echo "Array setelah diurutkan: " . implode(", ", $angka_urut);
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
