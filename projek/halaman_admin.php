<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Tambahkan stylesheet CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS untuk menyesuaikan tabel jika diperlukan */
        /* Misalnya, jika ingin menyesuaikan lebar gambar */
        /* .gambar-suku {
            max-width: 150px;
            height: auto;
        } */
    </style>
</head>

<body>

    <div class="container">
        <h1>Data Suku</h1>

        <?php
        // Koneksi ke database
        require("../config.php");

        // Query untuk mendapatkan data suku
        $query = "SELECT id, nama_suku, gambar_suku FROM suku ORDER BY id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Jika data suku ditemukan
            echo "<table class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Suku</th>
                            <th>Gambar Suku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama_suku'] . "</td>";
                echo "<td><img src='../" . $row['gambar_suku'] . "' alt='Gambar Suku' width='100' class='gambar-suku'></td>";
                echo "<td>
                        <a href='suku.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Lihat</a>
                        <form method='post' action='hapus_suku.php'>
                            <input type='hidden' name='suku_id' value='" . $row['id'] . "'>
                            <button type='submit' name='delete' class='btn btn-danger btn-sm'>Delete</button>
                        </form>
                    </td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Tidak ada data suku.</p>";
        }

        // Tutup koneksi database
        $conn->close();
        ?>

    </div>

    <!-- Tambahkan script Bootstrap (Jika diperlukan) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
