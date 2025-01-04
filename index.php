<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{text-align: center;}
    </style>
</head>
<body>
    <h1>Daftar Kamar</h1>
    <div class="container">
       <?php    include "arrayFunction.php";
                foreach ($kamar as $item): ?> <!-- Mulai --> 
                <div class="card greyed-out">
                    <img src="<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>">
                </div>
                <div class="card-content">
                    <h3><?= $item['nama'] ?></h3>
                    <p>Rp.<?= $item['harga'] ?></p>
                </div>
                <button type="submit" class="btn-pesan" >Pesan Kamar</button>
                <?php    endforeach ?> <!-- Berhenti -->
            </div>
</body>
</html>