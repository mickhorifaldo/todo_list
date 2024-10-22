<?php
include 'koneksi.php';

// Pesan untuk notifikasi
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($user_name) || empty($password) || empty($repeat_password)) {
        echo "<script>alert('Semua kolom harus diisi.'); window.location.href='daftar.php';</script>";
        exit; // Menghentikan eksekusi selanjutnya
    } elseif ($password !== $repeat_password) {
        echo "<script>alert('Kata sandi tidak cocok.'); window.location.href='daftar.php';</script>";
        exit; // Menghentikan eksekusi selanjutnya
    } else {
        // Menyiapkan dan mengikat
        $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user_name, $password);
        
        // Menjalankan pernyataan
        if ($stmt->execute()) {
            // Mengalihkan ke index.php dengan pesan sukses
            echo "<script>alert('registrasi anda berhasil'); window.location.href='index.php';</script>";
            exit; // Menghentikan eksekusi selanjutnya
        } else {
            // Mengalihkan kembali ke register.php dengan pesan error
            echo "<script>alert('Registrasi gagal. Silakan coba lagi.'); window.location.href='register.php';</script>";
            exit; // Menghentikan eksekusi selanjutnya
        }

        // Menutup pernyataan
        $stmt->close();
    }
}

// Menutup koneksi
$conn->close();
