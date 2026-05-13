<?php
session_start();
header('Content-Type: application/json');

// 1. Cek apakah user sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo json_encode(['success' => false, 'message' => 'Anda belum login, silakan muat ulang halaman.']);
    exit;
}

// 2. Hubungkan ke database (Sesuaikan path mundur satu folder)
require_once '../config/db_config.php';

// 3. Ambil input dari form
$old_pwd = $_POST['old_pwd'] ?? '';
$new_pwd = $_POST['new_pwd'] ?? '';
$nip     = $_SESSION['nip']; // Mengambil NIP dari sesi saat ini

if (empty($old_pwd) || empty($new_pwd)) {
    echo json_encode(['success' => false, 'message' => 'Form password tidak boleh kosong.']);
    exit;
}

// 4. Cari user di tabel data_akun berdasarkan NIP
$stmt = $conn->prepare("SELECT password FROM data_akun WHERE nip = ?");
$stmt->bind_param("s", $nip);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'Akun tidak ditemukan di database.']);
    exit;
}

$user = $result->fetch_assoc();

// 5. Validasi: Apakah MD5 password lama cocok dengan yang di database?
if (md5($old_pwd) !== $user['password']) {
    echo json_encode(['success' => false, 'message' => 'Password saat ini yang Anda masukkan salah.']);
    $stmt->close();
    $conn->close();
    exit;
}

// 6. Enkripsi dan Simpan password baru
$new_pwd_hashed = md5($new_pwd);
$update_stmt = $conn->prepare("UPDATE data_akun SET password = ? WHERE nip = ?");
$update_stmt->bind_param("ss", $new_pwd_hashed, $nip);

if ($update_stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Password berhasil diubah.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal memperbarui database. Hubungi admin.']);
}

$update_stmt->close();
$stmt->close();
$conn->close();
?>