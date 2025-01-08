<?php
require_once 'arrayFunction.php';

// Fungsi untuk mengambil semua data kamar
function getAllKamar() {
    global $kamar;
    return $kamar;
}

// Fungsi untuk menambahkan data kamar baru
function addKamar($nama, $harga, $deskripsi, $gambar, $tersedia) {
    global $kamar;

    // Hitung ID baru
    $id = count($kamar) + 1;

    // Tambahkan data ke array
    $kamar[] = [
        'id' => $id,
        'nama' => $nama,
        'harga' => $harga,
        'deskripsi' => $deskripsi,
        'gambar' => $gambar,
        'tersedia' => $tersedia
    ];
}
