<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
    h1 {
    color: black;
    text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }


    .container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Membuat kolom responsif */
        gap: 20px; /* Jarak antar kartu */
        justify-content: center; /* Pusatkan konten */
    }

    .card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        transition: background-color 0.3s;
    }

    .greyed-out {
        background-color: brown;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-content {
        padding: 15px;
    }

    h3 {
        margin: 10px 0;
        font-size: 20px;
        color: whitesmoke;
    }

    .card-content p {
        font-size: 14px;
        color: whitesmoke;
    }

    .btn {
        padding: 15px; /* Padding untuk tombol */
    }

    .btn-pesan {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s;
    }

    .btn-pesan:disabled {
        background-color: #d3d3d3;
        cursor: not-allowed;
    }
</style>
<body>
    <h1>Daftar Kamar</h1>
    <div class="desk">
        <!-- desk nya disini nanti -->
    </div>
    <div class="container">
        <?php include "arrayFunction.php"; foreach ($kamar as $item): ?> <!-- Mulai --> 
            <div class="card greyed-out">
                <img src="<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>">
                <div class="card-content">
                    <h3><?= $item['nama'] ?></h3>
                    <p>Rp.<?= $item['harga'] ?></p>
                </div>
                <div class="btn">
                    <button 
                    type="submit" 
                    class="btn-pesan" 
                    <?= $item['tersedia'] ? '' : 'disabled' ?>>
                    <?= $item['tersedia'] ? 'Pesan Kamar' : 'Tidak Tersedia' ?>
                    </button>
                </div>
            </div>
        <?php endforeach ?> <!-- Berhenti -->
    </div>
</body>
</html>