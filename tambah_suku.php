<?php
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $namaSuku = $_POST['nama_suku'];
    $deskripsiSuku = $_POST['deskripsi_suku'];
    $asalSuku = $_POST['asal_suku'];
    $jumlahPenduduk = $_POST['jumlah_penduduk'];
    $makananAdat = $_POST['makanan_adat'];
    $pakaianAdat = $_POST['pakaian_adat'];

    // Proses gambar suku
    $gambarSukuName = $_FILES['gambar_suku']['name'];
    $gambarSukuTmp = $_FILES['gambar_suku']['tmp_name'];
    $gambarSukuPath = "gambar/" . generateUniqueFileName($gambarSukuName, "suku");

    // Proses gambar makanan adat
    $gambarMakananAdatName = $_FILES['gambar_makanan_adat']['name'];
    $gambarMakananAdatTmp = $_FILES['gambar_makanan_adat']['tmp_name'];
    $gambarMakananAdatPath = "gambar/" . generateUniqueFileName($gambarMakananAdatName, "makanan_adat");

    // Proses gambar pakaian adat
    $gambarPakaianAdatName = $_FILES['gambar_pakaian_adat']['name'];
    $gambarPakaianAdatTmp = $_FILES['gambar_pakaian_adat']['tmp_name'];
    $gambarPakaianAdatPath = "gambar/" . generateUniqueFileName($gambarPakaianAdatName, "pakaian_adat");

    // Proses gambar tempat wisata
    $gambarTempatWisataName = $_FILES['tempat_wisata']['name'];
    $gambarTempatWisataTmp = $_FILES['tempat_wisata']['tmp_name'];
    $gambarTempatWisataPath = "gambar/" . generateUniqueFileName($gambarTempatWisataName, "tempat_wisata");

    // Proses gambar rumah adat
    $gambarRumahAdatName = $_FILES['rumah_adat']['name'];
    $gambarRumahAdatTmp = $_FILES['rumah_adat']['tmp_name'];
    $gambarRumahAdatPath = "gambar/" . generateUniqueFileName($gambarRumahAdatName, "rumah_adat");

    // Proses gambar lain
    $gambarLainName = $_FILES['gambar_lain']['name'];
    $gambarLainTmp = $_FILES['gambar_lain']['tmp_name'];
    $gambarLainPath = "gambar/" . generateUniqueFileName($gambarLainName, "gambar_lain");

    // Pindahkan file gambar ke direktori
    move_uploaded_file($gambarSukuTmp, $gambarSukuPath);
    move_uploaded_file($gambarMakananAdatTmp, $gambarMakananAdatPath);
    move_uploaded_file($gambarPakaianAdatTmp, $gambarPakaianAdatPath);
    move_uploaded_file($gambarTempatWisataTmp, $gambarTempatWisataPath);
    move_uploaded_file($gambarRumahAdatTmp, $gambarRumahAdatPath);
    move_uploaded_file($gambarLainTmp, $gambarLainPath);

    // Periksa apakah suku dengan nama yang sama sudah ada
    $checkQuery = "SELECT COUNT(*) as count FROM suku WHERE nama_suku = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("s", $namaSuku);
    $checkStmt->execute();
    $result = $checkStmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        // Suku dengan nama yang sama sudah ada, maka lakukan update data
        $updateQuery = "UPDATE suku SET deskripsi_suku = ?, asal_suku = ?, jumlah_penduduk = ?, makanan_adat = ?, gambar_makanan_adat = ?, pakaian_adat = ?, gambar_pakaian_adat = ?, tempat_wisata = ?, rumah_adat = ?, gambar_lain = ? WHERE nama_suku = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ssissssssss", $deskripsiSuku, $asalSuku, $jumlahPenduduk, $makananAdat, $gambarMakananAdatPath, $pakaianAdat, $gambarPakaianAdatPath, $gambarTempatWisataPath, $gambarRumahAdatPath, $gambarLainPath, $namaSuku);

        if ($updateStmt->execute()) {
            header("location:projek/update.html");
        } else {
            echo "Gagal memperbarui data suku: " . $conn->error;
        }
        $updateStmt->close();
    } else {
        // Suku dengan nama yang sama belum ada, maka lakukan penyisipan data baru
        $sql = "INSERT INTO suku (nama_suku, gambar_suku, deskripsi_suku, asal_suku, jumlah_penduduk, makanan_adat, gambar_makanan_adat, pakaian_adat, gambar_pakaian_adat, tempat_wisata, rumah_adat, gambar_lain) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssisssssss", $namaSuku, $gambarSukuPath, $deskripsiSuku, $asalSuku, $jumlahPenduduk, $makananAdat, $gambarMakananAdatPath, $pakaianAdat, $gambarPakaianAdatPath, $gambarTempatWisataPath, $gambarRumahAdatPath, $gambarLainPath);
        
        if ($stmt->execute()) {
            // Data berhasil dimasukkan ke database
            header("location:projek/update.html");
        } else {
            // Jika terjadi kesalahan
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    }
    $checkStmt->close();
}

// Tutup koneksi database
$conn->close();

// Fungsi untuk menghasilkan nama file unik
function generateUniqueFileName($fileName, $prefix) {
    $timestamp = time(); // Mendapatkan timestamp saat ini
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $namaFileUnik = $prefix . "_" . $timestamp . '.' . $fileExtension;
    return $namaFileUnik;
}
?>
