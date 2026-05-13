<?php
session_start();
header('Content-Type: application/json');

// Pastikan file ini namanya benar sesuai konfigurasi koneksi Anda sebelumnya
require_once '../config/db_config.php'; 

// Hanya terima metode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Metode tidak diizinkan']);
    exit;
}

// Ambil input
$nip      = trim($_POST['nip'] ?? '');
$password = trim($_POST['password'] ?? '');

// Validasi input kosong
if (empty($nip) || empty($password)) {
    echo json_encode(['success' => false, 'message' => 'NIP dan Password wajib diisi']);
    exit;
}

// Cari user berdasarkan NIP (Tabel diubah menjadi data_akun)
$stmt = $conn->prepare("SELECT id, nama_lengkap, nip, password, jabatan, unit_kerja FROM data_akun WHERE nip = ?");
$stmt->bind_param("s", $nip);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'NIP tidak ditemukan dalam sistem']);
    exit;
}

$user = $result->fetch_assoc();

// Verifikasi password (MD5 dari input password dibandingkan dengan MD5 di database)
if (md5($password) !== $user['password']) {
    echo json_encode(['success' => false, 'message' => 'Password yang Anda masukkan salah']);
    exit;
}

// Login berhasil - simpan sesi
$_SESSION['user_id']       = $user['id'];
$_SESSION['nama_lengkap']  = $user['nama_lengkap'];
$_SESSION['nip']           = $user['nip'];
$_SESSION['jabatan']       = $user['jabatan'];
$_SESSION['unit_kerja']    = $user['unit_kerja'];
$_SESSION['logged_in']     = true;

echo json_encode([
    'success'  => true,
    'message'  => 'Login berhasil!',
    'user'     => [
        'nama'    => $user['nama_lengkap'],
        'jabatan' => $user['jabatan'],
        'nip'     => $user['nip']
    ]
]);

$stmt->close();
$conn->close();
?>