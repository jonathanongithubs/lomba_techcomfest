<?php
// Pastikan koneksi ke database sudah diatur di sini atau di file konfigurasi terpisah
require("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete']) && isset($_POST['suku_id'])) {
    $sukuId = $_POST['suku_id'];

    // Query untuk menghapus data suku berdasarkan ID
    $deleteQuery = "DELETE FROM suku WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $sukuId);

    if ($stmt->execute()) {
         header("Location: halaman_admin.php");
    } else {
        // Jika terjadi kesalahan dalam penghapusan data
        echo "Gagal menghapus data suku: " . $conn->error;
    }

    $stmt->close();
}

// Tutup koneksi database jika sudah selesai digunakan
$conn->close();
?>
