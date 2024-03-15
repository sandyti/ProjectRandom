<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $input_angka = isset($_POST['angka']) ? $_POST['angka'] : '';
    
    // Mengubah string angka menjadi array
    $angka = array_map('intval', explode(',', $input_angka));

    // Fungsi untuk mengalikan array
    function kalikan($arr) {
        $total = 1;
        foreach ($arr as $nilai) {
            $total *= $nilai;
        }
        return $total;
    }

    // Menampilkan hasil
    echo "Hasil kali: " . kalikan($angka);
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
