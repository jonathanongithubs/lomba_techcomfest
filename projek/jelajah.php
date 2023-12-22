<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BudayaQ</title>
    <link rel="icon" href="assets/images/logo illuminate.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/jelajahstyle.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">



    <!-- HERO -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down"
        data-aos-delay="50">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="../projek/assets/images/FOTO LP 2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 data-aos="fade-left" data-aos-delay="50">Mulailah penjelahanmu!</h1>
                    <p data-aos="fade-right" data-aos-delay="50">mulai mencari apa yang kamu ingin tahu tentang budaya
                        Indonesia</p>
                    <a href="tambahkan.html"><button class="btn btn-dark">Tambahkan Suku</button></a>
                    <a href="beranda.php"><button class="btn btn-primary">Beranda</button></a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../projek/assets/images/eyestetix-studio-D3bk706VEds-unsplash.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Mulailah penjelahanmu!</h1>
                    <p>mulai mencari apa yang kamu ingin tahu tentang budaya Indonesia</p>
                    <a href="tambahkan.html"><button class="btn btn-dark">Tambahkan Suku</button></a>
                    <a href="beranda.php"><button class="btn btn-primary">Beranda</button></a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../projek/assets/images/iss042e215971-1068x711.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Mulailah penjelahanmu!</h1>
                    <p>mulai mencari apa yang kamu ingin tahu tentang budaya Indonesia</p>
                    <a href="tambahkan.html"><button class="btn btn-dark">Tambahkan Suku</button></a>
                    <a href="beranda.php"><button class="btn btn-primary">Beranda</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- HALAMAN 1 -->
    <div class="container mt-5">
        <div class="row">
        <?php
// Koneksi ke database
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'budaya'; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel suku
$query = "SELECT * FROM suku";
$result = mysqli_query($koneksi, $query);

// Loop untuk menampilkan data dalam blok HTML yang diinginkan
while ($row = mysqli_fetch_assoc($result)) {
    $nama_gambar = $row['gambar_suku']; // Nama file gambar dari tabel

    ?>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
        <div class="card">
            <img src="../<?= $nama_gambar ?>" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title"><?= $row['nama_suku'] ?></h5>
                <p class="card-text">Diunggah pada: <?= $row['time'];?></p>
                <a href="suku.php?id=<?= $row['id'] ?>" class="btn btn-dark">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <?php
}
// Menutup koneksi database
mysqli_close($koneksi);
?>


        </div>
    </div>

    <!-- ... (Tambahkan halaman lain jika diperlukan) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>