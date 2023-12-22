
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BudayaQ</title>
    <link rel="icon" href="assets/images/logo budayaq.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/ambonstyle.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-black sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo budayaq.png" style="width: 50px;" alt="">
                <span style="color: white;">BudayaQ</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="jelajah.php" style="color: white;">Kembali Jelajah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beranda.php" style="color: white;">Beranda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
require("../config.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $suku_id = $_GET['id'];

    // Query untuk mengambil data suku berdasarkan ID
    $query = "SELECT * FROM suku WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $suku_id);
    $stmt->execute();
    $result = $stmt->get_result();
}
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Lakukan tampilan data di sini
        $jumlahPenduduk=$row['jumlah_penduduk'];
        $makananAdat=$row['makanan_adat'];
        $pakaianAdat=$row['pakaian_adat'];


        $namaSuku = $row['nama_suku'];
        $deskripsiSuku = $row['deskripsi_suku'];
        $asalSuku = $row['asal_suku'];

        $gambarSuku=$row['gambar_suku'];
        $gambarMakananAdat=$row['gambar_makanan_adat'];
        $gambarPakaianAdat=$row['gambar_pakaian_adat'];
        $gambarRumahAdat=$row['rumah_adat'];
        $tempatWisata=$row['tempat_wisata'];
        $gambarLain=$row['gambar_lain'];
        // Lanjutkan dengan menampilkan data sesuai kebutuhan dalam HTML
    }
?>
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold"><?php echo "$namaSuku"; ?></h1>
                        <div class="line"></div>
                        <p><?php echo "$deskripsiSuku";?></p>
                    </div>
                </div>
            </div>


       <!-- Daftar Informasi Suku -->
<section id="daftar-informasi" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h2>Informasi Suku</h2>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6" data-aos="fade-down" data-aos-delay="250">
                <ul class="list-group">
                    <li class="list-group-item">Nama Suku: <?php echo $namaSuku; ?></li>
                    <li class="list-group-item">Asal Suku: <?php echo $asalSuku; ?></li>
                    <li class="list-group-item">Jumlah Penduduk: <?php echo number_format($jumlahPenduduk, 0, ',', '.')." Jiwa"; ?> </li>
                    <li class="list-group-item">Makanan Adat: <?php echo $makananAdat; ?></li>
                    <li class="list-group-item">Pakaian Adat: <?php echo $pakaianAdat; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
            

            <!-- gambar -->
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $gambarSuku ?>" alt="">
                        </div>
                        <a href="../<?= $gambarSuku ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>

                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $gambarMakananAdat ?>" alt="">
                        </div>
                        <a href="../<?= $gambarMakananAdat ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>


                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $gambarPakaianAdat ?>" alt="">
                        </div>
                        <a href="../<?= $gambarPakaianAdat ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>

                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $gambarRumahAdat ?>" alt="">
                        </div>
                        <a href="../<?= $gambarRumahAdat ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>


                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $tempatWisata ?>" alt="">
                        </div>
                        <a href="../<?= $tempatWisata ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>

                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="../<?= $gambarLain ?>" alt="">
                        </div>
                        <a href="../<?= $gambarLain ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
 
   
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>