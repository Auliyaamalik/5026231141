<html>
    <head>
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
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <style>
            body {
                background-color: #4d2735; 
                font-family: 'Noto Serif', sans-serif;
            } 

            .container-nav {
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }

            .menu-button {
                width: 35px;
                height: 35px;
                background-color: rgba(0, 0, 0, 0.3); /* Transparan sedikit */
                border-radius: 50%; /* Membuat bentuk lingkaran */
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
            }
            
            .menu-button:hover {
                background-color: #753b4f; /* Efek hover */
            }
            
            .menu-icon {
                font-size: 18px;
                color: white;
            }

            /* Mengatur agar navbar di tengah layar */
            .nav-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .nav-container {
                display: inline-block; /* Lebar mengikuti kontennya */
                background-color: rgba(222, 185, 185, 0.4);
                border-radius: 50px;
                padding: 5px 10px;
            }

            .nav-tabs-custom {
                display: flex;
                justify-content: center;
                border-radius: 50px;
            }

            .nav-link-custom {
                flex-grow: 1;
                height: 48px;
                border: none;
                font-weight: bold;
                padding: 10px 20px;
                border-radius: 50px;
                transition: all 0.3s ease-in-out;
            }

            /* Links (Tombol aktif) */
            .nav-link-active {
                background-color: black;
                color: white !important;
            }

            /* Shop (Tombol pasif, tanpa hover) */
            .nav-link-inactive {
                background-color: transparent;
                color: black;
            }

            .card {
                max-width: 600px;
                width: 100%;
                background: none;
                border-radius: 30px;
                text-align: center;
                overflow: hidden; /* biar ga keluar card */
                height: auto; /* biar tinggi nyesuain konten */
                align-items: center;
                padding: 10px;
                border: 1px solid white;
                transition: background-color 0.3s ease;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                height: 100%; /* memastikan semua card memiliki tinggi sama*/
                background: #ffffff;
                border-radius: 20px; /* Membuat sudut lebih bulat */
                overflow: hidden;
                flex-grow: 1; /* Memungkinkan card-body mengambil semua ruang tersisa */
                padding: 5px;
                justify-content: center;
                align-items: center;
            }

            .col-4 {
                padding-left: 4px;
                padding-right: 4px;
            }

            .card-body img{
                max-width: 100%;
                height: auto;
            }

            .card-text {
                font-size: 14px;
                color: rgb(185, 185, 185);
            }

            .card:hover {
                background-color: rgb(255, 255, 255);
            }

            .card:hover .card-title{
                color: #000000 !important; /* Mengubah warna teks pada hover */
            }

            .card:hover .btn .menu-icon {
                color: #000000 !important; /* Mengubah warna icon menu pada hover */
            }

            .linktree-box {
                width: 256px;
                height: 47px;
                background: rgba(255, 255, 255, 0.75);
                border-radius: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 8px;
                box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .linktree-box:hover {
                background: rgba(255, 255, 255, 0.95);
                box-shadow: rgba(0, 0, 0, 0.3) 0px,6px,12px 0px;
            }

        </style>
    </head>
    <body>
        <div class="container-nav mt-3">
            <nav class="navbar navbar-expand-sm">
                <button class="menu-button ml-auto mr-1 mt-2">
                    <span class="menu-icon">⋯</span>
                </button>
            </nav>
        </div>

        <div class="d-flex flex-column align-items-center">
            <div class="text-center mb-3" id="profile-picture">
                <img class="rounded-circle object-contain"
                    src="profilelaufey.webp" alt="profile-picture" width="96px"
                    height="96px">
            </div>
            <div class="text-center" id="profile-title">
                <h5 class="username text-white font-weight-bold">@laufey <img
                        src="verified.svg" class="verified-icon"
                        alt="Verified"></h5>
            </div>
            <div class="text-center" id="profile-description">
                <p class="text-white">silver lining out April 3 🎠</p>
            </div>
        </div>
        <div class="nav-wrapper">
            <nav class="nav-container">
                <ul class="nav nav-tabs-custom">
                    <li class="nav-item">
                        <button class="nav-link nav-link-custom nav-link-inactive" onclick="location.href='linktree.html'">Links</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link nav-link-custom nav-link-active">Shop</button>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="d-flex justify-content-center mt-4 px-3">
            <div class="card d-flex align-items-center w-100">
                <button class="btn" data-toggle="modal" data-target="#accessories">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="a1.webp" alt="Bottle">
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="a2.webp" alt="Bottle">
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="a3.webp" alt="Bottle">
                            </div>
                        </div>
                    </div>
                    <h6 class="card-title font-weight-bold text-center text-white mt-3 mb-0">Accesories</h6>
                    <p class="card-text text-center mb-0">5 Products</p>
                    <button class="btn dot-button ml-auto mt-0">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </button>
            </div>
        </div>

        <!-- Modal 1 -->
        <div class="modal" id="accessories">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h1 class="modal-title text-center">Accessories</h1>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 px-3">
            <div class="card d-flex align-items-center w-100">
                <button class="btn" data-toggle="modal" data-target="#collection">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="c1.webp" alt="Bottle">
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="c2.webp" alt="Bottle">
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="card-body">
                                <img src="c3.webp" alt="Bottle">
                            </div>
                        </div>
                    </div>
                    <h6 class="card-title font-weight-bold text-center text-white mt-3 mb-0">The Goddess Collection</h6>
                    <p class="card-text text-center mb-0">4 Products</p>
                    <button class="btn dot-button ml-auto mt-0">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </button>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal" id="collection">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h1 class="modal-title text-center">The Goddess Collection</h1>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3 mb-5">
        <div class="linktree-box">
            <!-- Icon -->
            <svg
                width="30"
                height="30"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                style="flex-shrink: 0">
                <path
                    d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z"
                    fill="#000000"
                    transform="scale(0.5) translate(12 12)" />
            </svg>
            <!-- Text -->
            <div
                style="color: #222; font-weight: 600;">Join Laufey on
                Linktree
            </div>
        </div>
    </div>

    </body>
</html>