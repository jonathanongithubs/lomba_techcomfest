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
    <link rel="stylesheet" href="./assets/css/style.css">
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
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_admin.html">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-white fw-semibold display-1">Jelajahi seluruh <span
                            style="color: blue;">budaya</span> indonesia
                    </h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">melalui mata anda, platform kami BudayaQ
                        jelajahi dunia</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a type="button" class="btn btn-primary rounded" href="jelajah.php">Jelajahi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding" style="background-color: #222; color: #fff;">
    <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold text-light">Tentang Kami</h1>
                        <div class="line"></div>
                        <p>Kami merupakan siswa SMK Telkom 1 Medan, yang menduduki bangku kelas 12 berjurusan RPL.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/fotosmktelkom1medan.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1 class="text-primary">Tujuan kami</h1>
                    <p class="mt-3 mb-4">Menyajikan informasi mendalam mengenai beragam aspek budaya, dari sejarah
                        hingga tradisi, dengan tujuan melestarikan warisan budaya dan mempromosikan keberagaman
                        kultural.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5 class="text-primary">Email</h5>
                            <p>simanjuntakjonathan233@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-instagram-line"></i>
                        </div>
                        <div>
                            <h5 class="text-primary">Our Instagram</h5>
                            <p>@jonathaans20 @randy_jrmy @zelion.sm__</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5 class="text-primary">Lokasi</h5>
                            <p>SMK TELKOM 1 MEDAN, Jl. Jamin Ginting Km. 11 No. 9C, Simpang Selayang, Kec. Medan
                                Tuntungan, Kota Medan, Sumatera Utara 20135</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <div class="faq-bg" id="faq">
        <div class="faq-container">
            <h1 class="text-light" data-aos="fade-left">Pertanyaan yang Sering Diajukan (FAQ)</h1>
            <p class="text-light" data-aos="fade-left">Temukan jawaban untuk pertanyaan umum di bawah ini.</p>
        </div>
        <div class="accordion" id="accordionExample" data-aos="fade-right">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu BudayaQ
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        BudayaQ adalah website yang dimana kalian bisa menelusuri budaya budaya dan suku suku yang
                        ada di Indonesia.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apakah ini mudah digunakan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya! Web ini sudah didesain dengan memperhatikan kenyamanan pengguna.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apakah datanya akurat?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Data yang kami gunakan adalah data yang terpercaya.
                    </div>
                </div>
            </div>
        </div>
        




    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top" data-aos="fade-up" data-aos-delay="50">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="./assets/images/logo budayaq.png" style="width: 200px;" alt=""></a>
                        <div class="line"></div>
                        <p>melalui mata anda, platform kami BudayaQ jelajahi dunia</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-dribbble-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Sosial Media</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Dribble</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Navigasi</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#hero">Beranda</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#masuk">Masuk/Daftar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Kontak</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Medan, Indonesia</li>
                            <li>08xxxxx</li>
                            <li>https://github.com/jonathanongithubs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>

</html>