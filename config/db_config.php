<?php
// ============================================
// Konfigurasi Koneksi Database
// ============================================
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = 'root'; // <-- ISI BAGIAN INI DENGAN 'root'
$db_name = 'db_timkeryankep';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die(json_encode([
        'success' => false,
        'message' => 'Koneksi database gagal: ' . $conn->connect_error
    ]));
}

$conn->set_charset("utf8mb4");
?>