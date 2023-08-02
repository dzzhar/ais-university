<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AIS Universitas Tadika Mesra</title>

    <!-- Favicons -->
    <link href="{{ asset('/img/logo.png') }}" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-at d-flex align-items-center"><a
                        href="#">office@tadikamesra.co.id</a></i>
                <i class="bi bi-telephone d-flex align-items-center ms-4"><a href="#">+62 811 212 212</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="linkedin"><i class="bi bi-twitter"></i></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1><a href="#hero" class="logo"><img src="{{ asset('img/logo-univ.png') }}" alt="Uni Image"></a></h1>



            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#counts">Data</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center mb-5">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>AIS <span>Universitas Tadika Mesra</span></h1>
            <h2>Media Digital Layanan, Monitoring, dan Penyajian Akademik</h2>
            <div class="d-flex">
                ` <a href="/register" class="btn-get-started scrollto">Register</a>
                <a href="/login" class="btn-get-started scrollto">Login</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <main>
        <section id="layanan" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title mb-5 mt-5">
                    <h2>Layanan</h2>
                    <h3>Layanan Terbaik Kami</h3>
                    <p>Dengan dukungan infrastruktur dan sistem yang modern, semua proses dapat berjalan dengan lancar
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-devices"></i></div>
                            <h4 class="title"><a href="">Web Responsive</a></h4>
                            <p class="description">Memberikan layanan optimal dengan beragam perangkat dan ukuran layar
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-bar-chart"></i></div>
                            <h4 class="title"><a href="">Data Statistik</a></h4>
                            <p class="description">Menyajikan data akademisi terkini dengan tingkat ketepatan yang
                                tinggi
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-edit"></i></div>
                            <h4 class="title"><a href="">Kelola Data</a></h4>
                            <p class="description">Mengizinkan pembuatan, pembacaan, pembaruan, dan penghapusan data</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Data Akademik</a></h4>
                            <p class="description">Menyajikan data dosen, mahasiswa, jurusan, kelas dan mata kuliah</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Count Section ======= -->
        <section id="counts" class="counts bg-gradient-primary">
            <div class="container" data-aos="fade-up">

                <div class="section-title mb-5 ">
                    <h2>Data</h2>
                    <h3>Data Akademik</h3>
                    <p>Menampilkan Data Statistik Sistem Informasi Terkini</p>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-mortarboard"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $userCount }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Mahasiswa Aktif</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $dosenCount }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Dosen Pengajar</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-book"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $mataKuliahCount }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Mata Kuliah</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-bank"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jurusanCount }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Count Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-9 col-md-6 footer-contact">
                        <h3>Universitas Tadika Mesra</h3>
                        <p>
                            Jl. KH Agus Salim 56<br>
                            Menteng, Jakarta Pusat<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 811 212 212<br>
                            <strong>Email:</strong> office@tadikamesra.co.id<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                Copyright &copy;2023 <strong><span>Universitas Tadika Mesra</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed with <a href="https://bootstrapmade.com/">BootstrapMade</a> by <strong>Kelompok 4</strong>
                Teknik Informatika 11
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
