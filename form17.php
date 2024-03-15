<?php
// Data produk dan harga
$produk = [
    'Kaos'   => 100000,
    'Celana' => 200000,
    'Topi'   => 50000
];

// Inisialisasi variabel total
$total = 0;

// Jika formulir dikirimkan (setelah mengklik tombol "Hitung Total")
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai jumlah dari formulir
    $quantityKaos = isset($_POST['quantityKaos']) ? intval($_POST['quantityKaos']) : 0;
    $quantityCelana = isset($_POST['quantityCelana']) ? intval($_POST['quantityCelana']) : 0;
    $quantityTopi = isset($_POST['quantityTopi']) ? intval($_POST['quantityTopi']) : 0;

    // Hitung total belanja
    $total = $produk['Kaos'] * $quantityKaos +
             $produk['Celana'] * $quantityCelana +
             $produk['Topi'] * $quantityTopi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Form Belanja</h2>

    <form method="post" action="">
        <label for="quantityKaos">Kaos (Rp. <?php echo number_format($produk['Kaos'], 0, ',', ','); ?>)</label>
        <input type="number" name="quantityKaos" value="0" min="0"><br>

        <label for="quantityCelana">Celana (Rp. <?php echo number_format($produk['Celana'], 0, ',', ','); ?>)</label>
        <input type="number" name="quantityCelana" value="0" min="0"><br>

        <label for="quantityTopi">Topi (Rp. <?php echo number_format($produk['Topi'], 0, ',', ','); ?>)</label>
        <input type="number" name="quantityTopi" value="0" min="0"><br>

        <button type="submit">Hitung Total</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <h3>Hasil Total Belanja</h3>
        <p>Total belanja: Rp. <?php echo number_format($total, 0, ',', ','); ?></p>
    <?php endif; ?>
</body>
</html>
