<?php
function jumlahkan($arr) {
    $total = 0;
    foreach ($arr as $nilai) {
        $total += $nilai;
    }
    return $total;
}

// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $inputAngka = $_POST["angka"];

    // Pisahkan nilai yang dipisahkan oleh koma menjadi array
    $angka = explode(",", $inputAngka);

    // Hilangkan spasi ekstra di setiap nilai
    $angka = array_map('trim', $angka);

    // Buatkan hasil penjumlahan
    $total = jumlahkan($angka);
} else {
    // Set nilai default jika form belum di-submit
    $angka = [];
    $total = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjumlahan</title>
</head>
<body>
    <h1>Form Penjumlahan</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="angka">Masukkan angka (pisahkan dengan koma):</label>
        <input type="text" name="angka" id="angka" value="<?php echo implode(", ", $angka); ?>" required>
        <br>
        <button type="submit">Hitung Total</button>
    </form>

    <?php
    // Tampilkan hasil penjumlahan jika form sudah di-submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Hasil Penjumlahan:</h2>";
        echo "<p>Total: " . $total . "</p>";
    }
    ?>
</body>
</html>
