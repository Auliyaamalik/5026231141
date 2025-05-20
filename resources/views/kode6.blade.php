<html>
    <head>
        <title>Kode Soal 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            .banner {
                width: 100%;
                object-fit: cover;
                background-size: cover;
                background-position: center;
            }

            .card {
                display: flex;
                flex-direction: column;
                height: 100%; /* memastikan semua card memiliki tinggi sama*/
                border: 1px solid #000000;
                border-radius: 10px; /* Membuat sudut lebih bulat */
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                /* Memungkinkan card-body mengambil semua ruang tersisa */
                padding: 5px;
                justify-content: space-between;
            }

            .card-title {
                font-size: 9px;
                font-weight: bold;
                word-wrap: break-word;
                /* Memastikan teks bisa turun ke bawah */
                white-space: normal;
                /* Mengizinkan teks turun ke bawah */
                overflow: hidden;
                /* Mencegah teks keluar dari batas card */
                text-overflow: clip;
                /* Tidak memotong teks dengan ... */
                margin-bottom: 2px; /* Kurangi jarak bawah */
            }

            .card-header {
                font-weight: bold;
                color: white;
                font-size: 6px;
                text-align: left;
                padding: 2px 6px;
                height: auto;
                display: inline-block;
                align-items: center;
                justify-content: center;
                background: rgb(37, 106, 255);
                position: absolute;
            }

            .card-text {
                font-size: 7px;
                color: rgb(100, 100, 100);
                margin-top: 2px; /* Kurangi jarak atas */
            }

            .row {
                --bs-gutter-x: 2px;
                --bs-gutter-y: 2px;
                margin-left: -1px;
                margin-right: -1px;
            }

            .col-3 {
                padding-left: 4px;
                padding-right: 4px;
            }

            .card-img-top {
                width: 100%;
                height: auto; /* Sesuaikan tinggi */
                object-fit: cover; /* Memastikan gambar mengisi area sepenuhnya */
                margin-top: 14px;
            }

            .card-custom{
                background-color: #F4F4F4; /* Warna latar abu-abu muda */
                border-radius: 12px;
                padding: 15px;
            }

            .arrow-icon {
                font-size: 20px;
                color: black;
                position: absolute;
                right: 15px;
                bottom: 15px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid mt-3">
            <img src="images/logo.png" class="rounded-circle border border-dark p-1" alt="Logo" width="45" height="45">
        </div>
        <div class="container-fluid p-0 mt-2">
            <img class="img-fluid w-100" src="images/banner.png" alt="banner">
        </div>
        <nav class="navbar navbar-expand-sm bg-secondary">
            <ul class="navbar-nav"></ul>
            </ul>
        </nav>
        <h6 class="text-center font-weight-bold mt-3">FEATURED EQUIPMENT</h6>
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top img-behind" src="images/lighting.png" alt="Lighting">
                        <div class="card-body">
                            <h6 class="card-title text-left font-weight-bold">Lighting Set Sony</h6>
                            <p class="card-text">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="images/canonlens.png" alt="Canon Lens" style="width: 100%;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Canon Lens EFS 18-135mm</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="images/recorder.png" alt="camrecorder" style="width: 100%;">
                        <div class="card-body glex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Sony PXW-Z90T XDCAM camrecorder</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="images/camdepan.png" alt="Lighting" style="width: 100%;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Canon EOS 40000</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-center font-weight-bold mt-4">CAMERA & LENS</h6>
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="images/nikon.png" alt="Nikon" style="width: 100%;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Nikon D7500</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="images/canonlens.png" alt="Canon Lens" style="width: 100%;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Canon Lens EFS 18-135mm</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="images/recorder.png" alt="Sony" style="width: 100%;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Sony PXW-Z90T XDCAM camrecorder</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top" src="images/camdepan.png" alt="Canon EOS" style="width: 100%;">
                        <div class="card-body flex-ggrow-1">
                            <h6 class="card-title text-left font-weight-bold">Canon EOS 40000</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top align-self-center mt-2" src="images/cam ungu.png" alt="Instax min11" style="width: 40px; height: auto;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Instax min11</h6>
                            <p class="card-text text-left">🔴 19 November 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top align-self-center mt-2" src="images/cam kuning.png" alt="Instax slim-go" style="width: 40px; height: auto;">
                        <div class="card-body flex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Instax slim-go</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">Mostly Borrowed</div>
                        <img class="card-img-top align-self-center" src="images/canoneos.png" alt="Camon EOS" style="width: 40px; height: auto;">
                        <div class="card-body glex-grow-1">
                            <h6 class="card-title text-left font-weight-bold">Canon EOS 800</h6>
                            <p class="card-text text-left">🔴 20 November 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top align-self-center mt-2" src="images/sony.png" alt="Lighting" style="width: 40px; height: auto;">
                        <div class="card-body flex-ggrow-1">
                            <h6 class="card-title text-left font-weight-bold">Sony Zeiss</h6>
                            <p class="card-text text-left">🟢 Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-dark btn-sm mt-4" style="margin-right: 17px; border-radius: 20px; box-shadow: 1px 6px 2px rgba(0, 0, 0, 0.1)">Click More ➝</button>
        </div>
        <h6 class="text-center font-weight-bold mt-4">BARANG SEDANG DIPINJAM</h6>
        <div class="container mt-3 d-flex justify-content-center align-items-center">
            <div class="card card-custom d-flex flex-row position-relative p-2" style="width: 325px; height: 150px; border: 0px solid #ffffff">
                <div class="image-container mt-3">
                    <img src="images/camdepan.png" alt="Camera" style="margin-left: -10px; width: 98px; height: auto;">
                    <p class="text-muted small mt-1" style="font-size: 9px;">E17_YANUAR - CREW ITS TV</p>
                </div>
                <div class="flex-grow-1 mt-3">
                    <h6 class="fw-bold mb-1 text-left" style="font-size: 10px; margin-left: 20px">Liputan Pengukuhan Proffesor</h6>
                    <p class="text-muted mb-1 text-left" style="font-size: 10px; margin-left: 20px">Disewakan pada tanggal <br> <strong>20/11/24 - 21/11/2024</strong></p>
                    <p class="text-primary mb-1 text-left" style="font-size: 10px; margin-left: 20px"><strong>07.00 - 19.00</strong></p>
                    <p class="text-muted mb-1 text-left" style="font-size: 10px; margin-left: 20px">List Barang: <strong>Canon EO400D, Tripod...</strong></p>
                </div>
                <div class="arrow-icon position-absolute" style="bottom: 5px; right: 15px; font-size: 18px;">
                    ➝
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 bg-light"></div>
        </div>
    </body>
</html>
