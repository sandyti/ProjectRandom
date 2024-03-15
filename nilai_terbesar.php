<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai angka dari form
    $input_angka = isset($_POST['angka']) ? $_POST['angka'] : '';
    
    // Mengubah string angka menjadi array
    $angka = array_map('intval', explode(',', $input_angka));

    // Fungsi untuk mencari nilai terbesar
    function nilai_terbesar($arr) {
        $max = $arr[0];
        foreach ($arr as $nilai) {
            if ($nilai > $max) {
                $max = $nilai;
            }
        }
        return $max; 
    }

    // Menampilkan hasil
    echo "Nilai terbesar: " . nilai_terbesar($angka);
} else {
    // Jika akses langsung ke file ini tanpa melalui form, redirect ke halaman form
    header("Location: index.php");
    exit();
}
?>
