<?php
require_once 'function.php';

// Tangkap data dari form jika dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $harga = (int)$_POST['harga'];
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $gambar = htmlspecialchars($_POST['gambar']);
    $tersedia = isset($_POST['tersedia']) ? true : false;

    // Tambahkan data baru
    addKamar($nama, $harga, $deskripsi, $gambar, $tersedia);
}

// Ambil semua data kamar
$dataKamar = getAllKamar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kamar</title>
</head>
<body>
    <h1>Tambah Data Kamar</h1>
    <form method="post" action="">
        <label for="nama">Nama Kamar:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" name="harga" id="harga" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" required></textarea><br><br>

        <label for="gambar">URL Gambar:</label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>

        <label for="tersedia">Tersedia:</label>
        <input type="checkbox" name="tersedia" id="tersedia" checked><br><br>

        <button type="submit">Tambah</button>
    </form>

    <h2>Data Kamar</h2>
    <?php if (!empty($dataKamar)): ?>
        <ul>
            <?php foreach ($dataKamar as $k): ?>
                <li>
                    <strong><?= htmlspecialchars($k['nama']); ?></strong><br>
                    Harga: <?= number_format($k['harga'], 0, ',', '.'); ?><br>
                    Deskripsi: <?= htmlspecialchars($k['deskripsi']); ?><br>
                    Gambar: <img src="<?= htmlspecialchars($k['gambar']); ?>" alt="<?= htmlspecialchars($k['nama']); ?>" width="100"><br>
                    Tersedia: <?= $k['tersedia'] ? 'Ya' : 'Tidak'; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada data kamar.</p>
    <?php endif; ?>
</body>
</html>
