<?php 
    include 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="footer.css">
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
        /* padding: 20px; */
    }
    .container {
        margin: 10px;
        display: flex;
        justify-content: center; 
        flex-wrap: wrap;        
    }
    .card {
        gap: 20px; 
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        transition: background-color 0.3s;
    }

    .greyed-out {
        background-color: yellow;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-content {
        gap: 20px;
        padding: 15px;
    }
    /* section{
        padding: 0;
    } */
    .hero{
        background-image: url(asset/k3.jpg);
        no-repeat center center/cover;
        height: 600px;
        color: white;
        padding:100px 0;
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
    <section class="hero">
        <div class="center">
            <h1 class="">Enjoy Your Holiday</h1>
            <p>Welcome to Makassar Rooms, where comfort meets luxury.</p>
            <a href="#" class="">Lihat Kamar</a>
        </div>
    </section>

    <h1>Daftar Kamar</h1>
    <div class="desk">
        <!-- desk -->
    </div>
    <div class="container">
        <?php include "data.php"; foreach ($kamar as $item): ?> 
            <div class="card <?= in_array($item['id'], $bookingKamar)? 'greyed-out' : '' ?>">
                <img src="<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>">
                <div class="card-content">
                    <h3><?= $item['nama'] ?></h3>
                    <p>Rp.<?= $item['harga'] ?></p>
                     <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                            <?php foreach ($bookingKamar as $room_id): ?> 
                                <input type="hidden" name="bookingKamar[]" value="<?= $room_id ?>">
                            <?php endforeach; ?>
                        <button class="btn-pesan" type="submit" name="pesan" <?= in_array($item['id'],$bookingKamar) ? 'disabled' : ''?>>Pesan kamar</button>
                    </form> 
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
    <div class="left-section">
        <div class="header">Deskripsi Website</div>
        <p>Ini adalah deskripsi singkat tentang website ini. Website ini bertujuan untuk memberikan informasi yang berguna dan menarik bagi pengunjung.</p>
        <div class="creator-info">
            <h4>Kelompok 3</h4>
            <strong>Nama Pembuat:</strong> Muhammad Amin Hidayat (Daya)<br>
            <strong>Nama Pembuat:</strong> ALfina Syarif (Alfi)<br>
            <strong>Nama Pembuat:</strong> SItti Azzahra (Zahra)<br>
        </div>
    </div>
    <div class="right-section">
        <div class="header">Peta Lokasi</div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.664694332699!2d119.40185560944789!3d-5.157541352087754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d4363e11805%3A0x12c787d64976dbed!2sGammara%20Hotel%20Makassar!5e0!3m2!1sid!2sid!4v1736343773852!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Gammara Hotel Makassar</p>
        </div>
    </div>
</footer>
</body>
</html>