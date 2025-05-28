<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Sony Sugema College</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet" type="text/css" />
        <link
            href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
            rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script
            src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>

            function validasi()
            {
                var nama = document.getElementById("nama").value;
                var sekolah = document.getElementById("sekolah").value;
                var nomor = document.getElementById("nomor").value;
                var email = document.getElementById("email").value;
                var kelas = document.getElementById("kelas").value;
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (nama.length == 0)
                {
                    //alert("Nama lengkap harus diisi");
                    Swal.fire("Pesan", "Nama lengkap harus diisi!", "error");
                    document.getElementById("nama").focus();                        return false;
                }

                if (sekolah.length == 0)
                {
                    //alert("Asal sekolah harus diisi");
                    Swal.fire("Pesan", "Asal sekolah harus diisi!", "error");
                    document.getElementById("sekolah").focus();                        return false;
                }

                if (nomor.length == 0)
                {
                    //alert("Nomor Handphone (WA) harus diisi");
                    Swal.fire("Pesan", "Nomor Handphone (WA) harus diisi!", "error");
                    document.getElementById("nomor").focus();
                    return false;
                }

                if (email.length == 0)
                {
                    //alert("Email harus diisi");
                    Swal.fire("Pesan", "Email harus diisi!", "error");
                    document.getElementById("email").focus();                        return false;
                }

                if (kelas.length == 0)
                {
                    //alert("Kelas harus diisi");
                    Swal.fire("Pesan", "Kelas harus diisi!", "error");
                    document.getElementById("kelas").focus();                        return false;
                }

                if (isNaN(nomor)) {
                    Swal.fire("Pesan", "Nomor handphone (WA) harus berisi angka!", "error");
                    document.getElementById("nomor").focus();
                    return false;
                }

                if (nomor.length < 10) {
                    Swal.fire("Pesan", "Nomor handphone terlalu pendek!", "error");
                    document.getElementById("nomor").focus();
                    return false;
                }

                if (!emailPattern.test(email)) {
                    Swal.fire("Pesan", "Format email tidak valid!", "error");
                    document.getElementById("email").focus();
                    return false;
                }
                //defaultnya return true

                // Semua validasi lolos
                Swal.fire({
                    title: "Anda Berhasil Terdaftar!",
                    text: "Selamat menjadi bagian dari sahabat SSC",
                    imageUrl: "assets/img/logossc.png",
                    imageAlt: "Logo SSC",
                    confirmButtonText: "OK",
                    customClass: {
                    confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                });
                return false; // agar tidak reload halaman
            }
        </script>

        <style>

            .welcome-icon {
                position: relative;
                width: 65px;
                height: 65px;
                display: table;
                vertical-align: middle;
                margin: 0 auto 20px;
                border-radius: 50%;
                background-color: #88e234;
                border-radius: 50%;
                color: #ffffff;
                font-size: 34px;
                text-align: center;
                margin-top: 10px;
            }

            .helper{
                display: table-cell;
                vertical-align: middle;
            }

            .fa {
                display: inline-block;
            }

            .btn-blue-gradiant {
                background: #4b83b8;
                background: -webkit-linear-gradient(
                legacy-direction(to right),
                #4b83b8 0%,
                #6cbad0 100%
                );
                background: -webkit-linear-gradient(left, #4b83b8 0%, #6cbad0 100%);
                background: -o-linear-gradient(left, #4b83b8 0%, #6cbad0 100%);
                background: linear-gradient(to right, #4b83b8 0%, #6cbad0 100%);
            }

            .btn-custom {
                background-color: #03a9f5;
                color: white;
                border-radius: 8px;
                padding: 10px 20px;
                border: none;
                transition: background-color 0.3s;
            }

            .btn-custom:hover {
                background-color: #444444;
            }

            .btn:hover{
                background-color: #444444;
            }

        </style>

    </head>
    <body>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center"
            style="background-image: url(assets/img/sscheader.webp);">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0 font-weight-bold">Future
                    Education Today</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i
                            class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="col-md-6 text-center mx-auto">
                    <!-- Masthead Subheading-->
                    <p
                        class="masthead-subheading font-weight-light mb-0">Perubahan
                        dan inovasi terus
                        digulirkan untuk memperbaiki visi dan misi
                        kedepan yang sesuai dan tentunya kearah yang
                        lebih baik</p>
                    <button type="submit"
                        class="btn bg-white text-dark mt-3">Program
                        Kami</button>
                </div>
            </div>
        </header>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div class="col-md-6 text-center mx-auto mb-5">
                    <!-- Portfolio Section Heading-->
                    <h2
                        class="page-section-heading text-center text-uppercase text-secondary mb-0 font-weight-bold">Sony
                        Sugema College Surabaya</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i
                                class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Portofolio Subheading-->
                    <p
                        class="masthead-subheading font-weight-light text-center mb-5">Setelah
                        melalui beberapa tahapan proses, Sony Sugema College
                        pada
                        akhirnya menemukan suatu visi yang baru yaitu “future
                        education, today”, sekaligus perubahan logo yang lebih
                        dinamis, suatu visi yang jelas ke masa yang akan
                        datang</p>
                </div>
                <!-- Portfolio Grid Items-->

                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">View
                                    More</div>
                            </div>
                            <div
                                class="card-header p-0 position-relative mt-2 mx-2 z-index-2 text-align-center">
                                <div class="welcome-icon">
                                    <div class="helper"><i
                                            class="fa fa-user-circle"></i></div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">PENGAJAR
                                        BERKUALITAS</a>
                                </h5>
                                <p class="mb-0">
                                    Pengajar LBB SSC adalah lulusan dari
                                    PTN
                                    terbaik yang sangat kompeten pada
                                    bidang
                                    studinya. LBB SSC menerapkan
                                    pengajaran
                                    secara komprehensif antara konsep
                                    lengkap dan cara-cara spektakuler
                                    yang
                                    membuat suasana menyenangkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal2">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">View
                                    More</div>
                            </div>
                            <div
                                class="card-header p-0 position-relative mt-2 mx-2 z-index-2 text-align-center">
                                <div class="welcome-icon">
                                    <div class="helper"><i
                                            class="fa fa-users"></i></div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">KONSELING</a>
                                </h5>
                                <p class="mb-0">
                                    Tujuan utama with the crowd konselor
                                    menjalin kedekatan dengan siswa
                                    melalui
                                    program kesiswaan terjadwal. Tidak
                                    hanya
                                    seputar info pendidikan umum,
                                    seringkali
                                    siswa datang untuk konsultasi
                                    tentang
                                    cara belajar efektif
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal3">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">View
                                    More</div>
                            </div>
                            <div
                                class="card-header p-0 position-relative mt-2 mx-2 z-index-2 text-align-center">
                                <div class="welcome-icon">
                                    <div class="helper"><i
                                            class="fa fa-users"></i></div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">SUCCESSFUL
                                        STUDENT</a>
                                </h5>
                                <p class="mb-0">
                                    Rangkaian kegiatan yang memadukan antara
                                    IQ-EQ-SQ yang dilakukan untuk menyempurnakan
                                    usaha dalam meraih kesuksesan sebagai sarana
                                    memotivasi, memberi wawasan dan
                                    memvisualisasikan impian secara nyata.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section-->
        <section class="page-section portfolio text-white mb-0" id="portfolio"
            style="background-color: #88e234;">
            <div class="container">
                <div class="col-md-6 text-center mx-auto mb-5">
                    <!-- Portfolio Section Heading-->
                    <h2
                        class="page-section-heading text-center text-uppercase text-white mb-0">Layanan
                        Kami</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i
                                class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Portofolio Subheading-->
                    <p
                        class="masthead-subheading font-weight-light text-center mb-5">Setiap
                        siswa terlahir dengan otak jenius, hanya belum tahu cara
                        mengoptimalkan. SSC tahu bagaimana mengoptimalkan
                        potensi otak siswa. Dengan mengoptimalkan 3 kecerdasan
                        secara holistic (IQ-EQ-SQ), siswa akan dapat mencapai
                        kesuksesan yang membanggakan dan memuliakan, 88 persen
                        kesuksesan siswa lahir dari keyakinan/pikiran bawah
                        sadar. Semua terangkum dalam layanan Terbaik SSC
                    </p>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/jenjangsd.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">JENJANG SD
                                </h5>
                                <p class="mb-0">
                                    Program reguler jenjang SD dipersiapkan
                                    untuk siswa yang memerlukan kenyamanan
                                    belajar, bersama pengajar yang bersahabat
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/jenjangsmp.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">JENJANG SMP
                                </h5>
                                <p class="mb-0">
                                    Program reguler jenjang SMP dipersiapkan
                                    untuk layanan lebih yang akan diperoleh
                                    karena SSC menghargai masa depan anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/jenjangsma.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">JENJANG SMA &
                                    ALUMNI
                                </h5>
                                <p class="mb-0">
                                    Sukses tidak tercipta dalam sesaat. Tetapi
                                    dimulai dari pilihan-pilihan yang tepat dan
                                    bijak. Temukan dalam layanan program jenjang
                                    SMA
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/kekuatanssc.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">KEKUATAN SSC
                                </h5>
                                <p class="mb-0">
                                    Dengan mengoptimalkan 3 kecerdasan secara
                                    holistik, siswa akan dapat mencapai
                                    kesuksesan yang membanggakan dan memuliakan.
                                    Kekuatan tersebut adalah Quantum Learning
                                    (IQ), Emotional Mastery (EQ) dan Spiritual
                                    Journey (SQ). Bersama SSC Lebih Asyik,
                                    Berprestasi dan Lebih dari Sekedar Belajar
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/klinikbidangstudi.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">KLINIK BIDANG
                                    STUDI
                                </h5>
                                <p class="mb-0">
                                    SSC menyediakan klinik bidang studi yang
                                    merupakan tempat para siswa memeriksakan
                                    kemampuan belajar mereka atau konsultasi
                                    materi kepada DOKTER SPESIALIS BIDANG STUDI
                                    yang membuka praktik di klinik SSC. Siswa
                                    akan diperiksa dan dilayani oleh dokter
                                    bidang studi yang berpengalaman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#portfolioModal1">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div
                                    class="portfolio-item-caption-content text-center text-white">
                                    <h4>Info
                                        Lengkap
                                        <i
                                            class="fas fa-arrow-right text-xs ms-1"></i>
                                    </h4>
                                </div>
                            </div>
                            <img class="img-fluid"
                                src="assets/img/ssconservice.jpg"
                                alt="..." />
                            <div class="card-body text-center mt-4">
                                <h5 class="font-weight-bold">SSC ON SERVICE
                                </h5>
                                <p class="mb-0">
                                    SSC Online Service 24 Hours (SOS 24) adalah
                                    layanan yang diberikan kepada siswa aktif
                                    dengan tujuan memberikan solusi cepat untuk
                                    soal-soal rumit-sulit dan melilit. Siswa
                                    dapat mengirimkan soal-soal melalui media
                                    sosial (WA) kepada tim khusus SSC yang akan
                                    memberikan layanan 24 Jam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2
                    class="page-section-heading text-center text-uppercase text-secondary mb-0">DAFTARKAN
                    DIRIMU</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i
                            class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="frmDaftar" onsubmit="return validasi();">NAMA
                            LENGKAP
                            <input type="text"
                                class="form-control input-bordered"
                                id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap Anda">
                            <br>
                            ASAL SEKOLAH
                            <input type="text"
                                class="form-control input-bordered"
                                id="sekolah" name="sekolah"
                                placeholder="Masukkan Asal Sekolah Anda">
                            <br>
                            NOMOR HANDPHONE (WA)
                            <input type="text"
                                class="form-control input-bordered"
                                id="nomor" name="nomor"
                                placeholder="Contoh: 628192883777738 (Diawali dengan Angka 62)">
                            <br>
                            EMAIL
                            <input type="text"
                                class="form-control input-bordered"
                                id="email" name="email"
                                placeholder="Masukkan Email Anda">
                            <br>
                            KELAS
                            <select class="form-control input-bordered"
                                id="kelas"
                                name="kelas">
                                <option value>-- Pilih Kelas
                                    --</option>
                                <option value="4 SD">4
                                    SD</option>
                                <option value="5 SD">5
                                    SD</option>
                                <option value="6 SD">6
                                    SD</option>
                                <option value="7 SMP">7
                                    SMP</option>
                                <option value="8 SMP">8
                                    SMP</option>
                                <option value="9 SMP">9
                                    SMP</option>
                                <option value="10 SMA IPA">10 SMA
                                    IPA</option>
                                <option value="10 SMA IPS">10 SMA
                                    IPS</option>
                                <option value="11 SMA IPA">11 SMA
                                    IPA</option>
                                <option value="11 SMA IPS">11 SMA
                                    IPS</option>
                                <option value="12 SMA IPA">12 SMA
                                    IPA</option>
                                <option value="12 SMA IPS">12 SMA
                                    IPS</option>
                            </select>
                            <br>
                            <input type="submit" class="btn-custom"
                                value="DAFTARKAN">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Tentang Kami-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4" style="font-weight: bold;">Tentang Kami</h4>
                        <h6 style="font-weight: bold;">_______________</h6>
                        <p class="lead mb-0 mt-4">
                            Sony Sugema College (SSC), adalah bimbingan belajar
                            yang lahir sejak tahun 1990 dan sudah mengantarkan
                            ribuan siswa ke Sekolah dan PTN favorit. Sejak
                            berdirinya sampai sekarang SSC telah hadir di
                            seluruh Indonesia. Sudah saatnya SSC memerlukan
                            suatu perubahan yang baru melalui New Corporate
                            Identity yang akan mempersatukan visi dan misi yang
                            bersifat global.
                        </p>
                    </div>
                    <!-- Footer Link Website-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4" style="font-weight: bold;">Link Website</h4>
                        <h6 style="font-weight: bold;">_______________</h6>
                        <a class="lead nav-link" href="https://sonysugemacollege.com/" target="_blank">
                            Pusat Nasional
                        </a>
                        <a class="lead nav-link" href="https://bimbelssc.com/" target="_blank">
                            Pusat Wilayah Timur
                            </a>
                        <a class="lead nav-link" href="http://ristekdikti.go.id/" target="_blank">
                            Ristekdikti
                        </a>
                    </div>
                    <!-- Footer Berita Terkini-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4" style="font-weight: bold;">Berita Terkini</h4>
                        <h6 style="font-weight: bold;">_______________</h6>
                        <a class="lead nav-link" href="https://surabaya.bimbelssc.com/2021/08/22/data-bahan-ajar-bandung/" target="_blank">
                            Protected: Data Bahan Ajar dan Evaluasi
                            <p>There is no excerpt because this is a protected post.</p>
                        </a>
                        <a class="lead nav-link" href="https://surabaya.bimbelssc.com/2021/08/22/silabus-akademik/" target="_blank">
                            Silabus Akademik
                            <p>Silabus sebagai pedoman untuk merencanakan pengelolaan kegiatan pembelajaran lebih lanjut, yaitu…</p>
                        </a>
                        <a class="lead nav-link" href="https://surabaya.bimbelssc.com/2019/10/03/sederhana-tapi-lupa/" target="_blank">
                            Sederhana Tapi Lupa
                            <p>Hal Sederhana yang Sering Terlupakan, Sebuah Inspirasi dari “Dare to Dream,…</p>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Sony Sugema College Wilayah Timur - Surabaya &copy;
                    2021</small></div>
        </div>

    </body>
</html>
