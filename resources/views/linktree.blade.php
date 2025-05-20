<html>
    <head>
        <title>Linktree Laufey</title>
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

            .card-custom {
                max-width: 600px;
                background: none;
                border-radius: 30px;
                text-align: center;
                overflow: hidden; /* biar ga keluar card */
                height: auto; /* biar tinggi nyesuain konten */
                align-items: center;
                padding: 10px;
                position: relative; /* biar stretched-link bisa works */
                border: 1px solid white;
                transition: background-color 0.3s ease;
            }

            .dot-button {
                position: relative;
                z-index: 10; /* Pastikan tombol di atas stretched-link */
                background: none;
                border: none;
            }

            .card-custom:hover {
                background-color: rgb(255, 255, 255);
            }

            .card-custom:hover .text-white {
                color: #000000 !important; /* Mengubah warna teks pada hover */
            }

            .card-custom:hover .btn .menu-icon {
                color: #000000 !important; /* Mengubah warna icon menu pada hover */
            }

            .video-card{
                max-width: 600px;
                width: 100%;
                border-radius: 30px;
                overflow: hidden;
            }

            .merch-card {
                max-width: 600px;
                background: none;
                border-radius: 30px;
                text-align: center;
                overflow: hidden; /* biar ga keluar card */
                height: auto; /* biar tinggi nyesuain konten */
                align-items: center;
                position: relative; /* biar stretched-link bisa works */
                border: 1px solid white;
                width: 550px;
            }

            .list {
                background: none;
                border: none;
                text-align: center;
                display: flex;
                flex-direction: column;
                cursor: pointer;
                text-decoration: none;
            }

            a.list:hover {
                text-decoration: none;
            }

            .list img {
                width:100px ;
                border-radius: 10px;
            }

            .card-body{
                padding: 0.5em 0 0.5em 0;
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
                    src="images/profilelaufey.webp" alt="profile-picture" width="96px"
                    height="96px">
            </div>
            <div class="text-center" id="profile-title">
                <h5 class="username text-white font-weight-bold">@laufey <img
                        src="images/verified.svg" class="verified-icon"
                        alt="Verified"></h5>
            </div>
            <div class="text-center" id="profile-description">
                <p class="text-white">silver lining out now 🎠</p>
            </div>
        </div>
        <div class="nav-wrapper">
            <nav class="nav-container">
                <ul class="nav nav-tabs-custom">
                    <li class="nav-item">
                        <button class="nav-link nav-link-custom nav-link-active"
                            onclick="switchTab('links')">
                            <span class="d-flex align-items-center">
                                <span class="text-sm">Links</span>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                            class="nav-link nav-link-custom nav-link-inactive"
                            onclick="switchTab('shop')">
                            <span class="d-flex align-items-center">
                                <span class="text-sm">Shop</span>
                            </span>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>

        <script>
            function switchTab(tab) {
                if (tab === "shop") {
                    // Pindah ke halaman shop.html
                    window.location.href = "shop.html";
                }
            }
        </script>

        <div
            class="container mt-4 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laufey.ffm.to/silverlining" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict1.webp" alt="Pre-save" class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">"Silver Lining" out now</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a
                    href="https://veeps.com/laufey/3a7f869b-f098-491d-ae73-8cfa47a56e5a?utm_source=artist&utm_medium=organic&utm_campaign=artist-laufey"
                    target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict2.webp" alt="Symphony" class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Laufey's A Night At The
                        Symphony: Hollywood Bowl | Available on-demand,
                        exclusively on Veeps</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a
                    href="https://www.catbirdnyc.com/laufey?utm_source=tiktok&utm_medium=referral&utm_campaign=laufey_linktree"
                    target="_blank" class="stretched-link"
                    style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pink.png" alt="Laufey x Catbird"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Laufey x Catbird</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laufey.ffm.to/hollywoodbowl" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict4.webp" alt="Symphony" class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Listen to A Night At The
                        Symphony: Hollywood Bowl</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laufey.ffm.to/hollywoodbowl" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict5.webp" alt="Tpur Dates"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Upcoming Tour Dates</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 px-3">
            <div class="video-card embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                    src="https://www.youtube.com/embed/AKFIWElkqTo?si=5tIlcj8vm8k0KfkK"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laufey.ffm.to/goddessedition.bio"
                    target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict7.webp" alt="Tpur Dates"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Stream Bewitched: The Goddess
                        Edition out now</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>
        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laufey.ffm.to/goddesseditionphysicals.bio"
                    target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict8.webp" alt="Tpur Dates"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Order "Bewitched: The Goddess
                        Edition” Vinyl, CDs, & Cassettes</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card merch-card d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <div class="row w-100 align-items-center p-2 m-2">
                    <div class="col-2 text-left">
                        <svg width="20" height="20" viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="position-relative"
                            role="img" aria-hidden="false"
                            aria-labelledby="ltclid49842_title">
                            <title id="ltclid49842_title">Shop</title>
                            <path
                                d="M6.73 9.27H1V15h5.73V9.27ZM15 1H9.27v5.73H15V1ZM1 3.86a2.86 2.86 0 1 0 5.73 0 2.86 2.86 0 0 0-5.73 0ZM9.27 12.14a2.86 2.86 0 1 0 5.73 0 2.86 2.86 0 0 0-5.73 0Z"
                                stroke="white"></path>
                        </svg>
                    </div>
                    <div class="col-8 text-center">
                        <p class="text-white m-0" style="font-size: 14px;">Shop
                            The Goddess Collection</p>
                    </div>
                    <div class="col-2 text-right">
                        <span class="menu-icon text-white">⋮</span>
                    </div>
                </div>
                <div class="merch-container h-100 w-100 pt-3">
                    <div class="d-flex justify-content-start overflow-auto"
                        style="scrollbar-width: none">
                        <a class="list ml-4"
                            href="https://store.laufeymusic.com/products/bewitched-the-goddess-edition-navy-vinyl">
                            <img src="images/merch1.webp" alt>
                            <div class="card-body pl-2">
                                <p class="text-white"
                                    style="font-size: 12px;">Bewitched: The
                                    Goddess Edition 2LP Laufey Vinyl</p>
                            </div>
                        </a>
                        <a class="list ml-4"
                            href="https://store.laufeymusic.com/?srsltid=AfmBOooT8D_B9t6p_l1DtecUmLCBa3y795qPh3tT0zrSHxnCaKWBrkNc">
                            <img src="images/merch2.webp" alt="Sunset Blvd Vinyl">
                            <div class="card-body ">
                                <p class="text-white"
                                    style="font-size: 12px;">Bewitched: The
                                    Goddess Edition Coffee Table Set </p>
                            </div>
                        </a>
                        <a class="list ml-4"
                            href="https://store.laufeymusic.com/products/bewitched-the-goddess-edition-cd">
                            <img src="images/merch3.webp"
                                alt="I Said I Love You First Vinyl">
                            <div class="card-body">
                                <p class="text-white"
                                    style="font-size: 12px;">Bewitched:The
                                    Goddess Edition - CD</p>
                            </div>
                        </a>
                        <a class="list ml-4 mr-4"
                            href="https://store.laufeymusic.com/products/bewitched-the-goddess-edition-cassette">
                            <img src="images/merch4.webp"
                                alt="I Said I Love You First Vinyl">
                            <div class="card-body">
                                <p class="text-white"
                                    style="font-size: 12px;">Bewitched: The
                                    Goddess Edition- Cassette</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://www.laufeymusic.com/" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict10.webp" alt="Official Website"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Official Website</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://laylo.com/laufey" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pink.png" alt="Official Website"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Sign up for my mailing
                        list</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="container mt-3 d-flex justify-content-center align-items-center">
            <div
                class="card card-custom d-flex justify-content-between align-items-center position-relative"
                style="width: 100%;">
                <a href="https://www.laufeymusic.com/book-club" target="_blank"
                    class="stretched-link" style="text-decoration: none;"></a>
                <div class="d-flex align-items-center w-100">
                    <img src="images/pict12.webp" alt="Official Website"
                        class="rounded-circle"
                        style="width: 45px; height: 45px;">
                    <span class="text-white flex-grow-1 text-center mx-4"
                        style="font-size: 14px;">Join the Laufey Book
                        Club</span>
                    <button class="btn dot-button ml-auto">
                        <span class="menu-icon text-white">⋮</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://www.instagram.com/laufey"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title data-testid="svgTitle"
                                    id="title_0.5492817235898664">Instagram</title>
                                <path
                                    d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"
                                    fill="white"></path>
                                <path
                                    d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"
                                    fill="white"></path>
                                <path
                                    d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                        <a
                            href="https://web.facebook.com/laufeymusic?_rdc=1&_rdr#"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>Facebook</title>
                                <path
                                    d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                        <a
                            href="https://www.youtube.com/channel/UChpKl3waLmccNeYH9LGYjUQ"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>YouTube</title>
                                <path fill="white"
                                    d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"></path>
                            </svg>
                        </a>
                        <a
                            href="https://open.spotify.com/artist/7gW0r5CkdEUMm42w9XpyZO?si=5izlGUoXSz2tAgU7rS_z-w&nd=1&dlsi=f50afa9b30a94343"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>Spotify</title>
                                <path fill="white"
                                    d="M18,10.561a.494.494,0,0,1-.245-.065,15.2,15.2,0,0,0-10.95-1.55.5.5,0,0,1-.232-.973A16.2,16.2,0,0,1,18.25,9.626a.5.5,0,0,1-.247.935Z"></path>
                                <path fill="white"
                                    d="M16.646,13.632a.5.5,0,0,1-.249-.066,12.459,12.459,0,0,0-9.121-1.292.5.5,0,1,1-.237-.971A13.458,13.458,0,0,1,16.9,12.7a.5.5,0,0,1-.25.933Z"></path>
                                <path fill="white"
                                    d="M15.312,16.583a.5.5,0,0,1-.251-.068,9.777,9.777,0,0,0-7.295-1.033.5.5,0,0,1-.245-.97,10.768,10.768,0,0,1,8.043,1.139.5.5,0,0,1-.252.932Z"></path>
                                <path fill="white"
                                    d="M12,23A11,11,0,1,1,23,12,11.013,11.013,0,0,1,12,23ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2Z"></path>
                            </svg>
                        </a>
                        <a href="https://x.com/laufey" class="m-2 text-white"
                            target="_blank" class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>X</title>
                                <path fill="white"
                                    d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"></path>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@laufey"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>TikTok</title>
                                <path fill="white"
                                    d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"></path>
                            </svg>
                        </a>
                        <a href="https://www.snapchat.com/add/laufeyland"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>Snapchat</title>
                                <path fill="white"
                                    d="M12,22.5a6.309,6.309,0,0,1-3.574-1.315,2.457,2.457,0,0,0-2.3-.53,1.679,1.679,0,0,1-1.294-.018,1.522,1.522,0,0,1-.615-1.051c-.031-.125-.059-.159-.621-.284a7.775,7.775,0,0,1-.9-.245,1.512,1.512,0,0,1-1.19-1.5.968.968,0,0,1,.729-.907A5.19,5.19,0,0,0,5.885,12.8a11.574,11.574,0,0,1-1.808-1.067A1.816,1.816,0,0,1,6.138,8.741C6.11,8.357,6.09,7.9,6.091,7.375a5.909,5.909,0,0,1,11.818,0c0,.522-.018.982-.047,1.366a1.816,1.816,0,0,1,2.062,2.987A11.542,11.542,0,0,1,18.115,12.8a5.19,5.19,0,0,0,3.652,3.856.991.991,0,0,1,.732.939,1.524,1.524,0,0,1-1.193,1.466,7.775,7.775,0,0,1-.9.245c-.562.125-.59.159-.621.285a1.522,1.522,0,0,1-.615,1.05,1.679,1.679,0,0,1-1.294.018,2.458,2.458,0,0,0-2.3.529A6.3,6.3,0,0,1,12,22.5ZM6.789,19.552a3.914,3.914,0,0,1,2.19.8A5.367,5.367,0,0,0,12,21.5a5.367,5.367,0,0,0,3.021-1.149,3.464,3.464,0,0,1,3.132-.656c.405.118.515.075.516.075a1.477,1.477,0,0,0,.141-.423c.187-.757.791-.891,1.375-1.021a7.09,7.09,0,0,0,.793-.213c.508-.177.522-.438.522-.467l0-.021a6.226,6.226,0,0,1-4.393-4.748.822.822,0,0,1,.464-.93,10.283,10.283,0,0,0,1.756-1.02.817.817,0,0,0,.319-.537.807.807,0,0,0-.155-.6.817.817,0,0,0-1.141-.166,8.194,8.194,0,0,1-.852.536.5.5,0,0,1-.737-.512,15.116,15.116,0,0,0,.15-2.267,4.909,4.909,0,0,0-9.818,0,15.246,15.246,0,0,0,.15,2.267.5.5,0,0,1-.737.512,8.247,8.247,0,0,1-.851-.535.816.816,0,0,0-1.142.165.813.813,0,0,0,.165,1.141,10.206,10.206,0,0,0,1.755,1.02.823.823,0,0,1,.464.931,6.208,6.208,0,0,1-4.4,4.74c.008.057.022.318.53.5a7.09,7.09,0,0,0,.793.213c.584.13,1.188.264,1.375,1.021a1.329,1.329,0,0,0,.147.427h0a1.12,1.12,0,0,0,.51-.079A3.335,3.335,0,0,1,6.789,19.552Z"></path>
                            </svg>
                        </a>
                        <a href="https://discord.com/invite/laufeyland"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>Discord</title>
                                <path fill="white"
                                    d="M6.613 6.27a.5.5 0 1 0 .274.96l-.274-.96Zm10.5.96a.5.5 0 0 0 .274-.96l-.274.96ZM6.304 16.77a.5.5 0 0 0-.275.96l.275-.96Zm11.667.96a.5.5 0 1 0-.275-.96l.275.96Zm-1.388.103a.5.5 0 1 0-1 0h1Zm5.917 0 .447.224a.495.495 0 0 0 .017-.038l-.464-.186ZM20.75 4.417l.471-.167a.5.5 0 0 0-.185-.244l-.286.41Zm-5.25-1.75.053-.497a.5.5 0 0 0-.517.311l.464.186Zm-1.63 2.73a.5.5 0 1 0 .928.372l-.929-.371ZM8.416 17.834a.5.5 0 0 0-1 0h1Zm-6.526 0-.467.178c.004.013.01.025.015.037l.452-.215ZM3.557 4.417l-.295-.404a.5.5 0 0 0-.18.245l.475.159ZM8.5 2.667l.464-.186a.5.5 0 0 0-.519-.311l.055.497Zm.702 3.102a.5.5 0 1 0 .929-.371l-.929.371ZM9.167 12a.667.667 0 0 1-.667.667v1c.92 0 1.667-.746 1.667-1.667h-1Zm-.667.667A.667.667 0 0 1 7.833 12h-1c0 .92.747 1.667 1.667 1.667v-1ZM7.833 12c0-.368.299-.667.667-.667v-1c-.92 0-1.667.747-1.667 1.667h1Zm.667-.667c.368 0 .667.299.667.667h1c0-.92-.747-1.667-1.667-1.667v1Zm7.667.667a.667.667 0 0 1-.667.667v1c.92 0 1.667-.746 1.667-1.667h-1Zm-.667.667a.667.667 0 0 1-.667-.667h-1c0 .92.746 1.667 1.667 1.667v-1ZM14.833 12c0-.368.299-.667.667-.667v-1c-.92 0-1.667.747-1.667 1.667h1Zm.667-.667c.368 0 .667.299.667.667h1c0-.92-.747-1.667-1.667-1.667v1ZM6.887 7.231c2.018-.577 3.573-.856 5.113-.856 1.54 0 3.095.28 5.113.856l.274-.962c-2.065-.59-3.719-.894-5.387-.894-1.668 0-3.322.304-5.387.894l.274.962Zm-.858 10.5c4.173 1.192 7.769 1.192 11.942 0l-.275-.962c-3.994 1.141-7.398 1.141-11.392 0l-.275.962Zm9.554.102c0 .398.144.84.327 1.246.189.416.442.844.712 1.229.268.383.562.738.837 1.003.137.131.28.251.421.341.127.081.318.181.537.181v-1c.073 0 .082.028 0-.024a1.822 1.822 0 0 1-.264-.219 6.027 6.027 0 0 1-.712-.856 6.848 6.848 0 0 1-.62-1.068c-.163-.36-.238-.647-.238-.833h-1Zm2.834 4c1.061 0 2.006-.585 2.753-1.307.755-.728 1.369-1.653 1.777-2.469l-.894-.447c-.37.74-.922 1.564-1.578 2.197-.662.64-1.37 1.026-2.058 1.026v1Zm4.547-3.814c.435-1.087.57-2.887.325-5.197-.248-2.329-.89-5.235-2.068-8.572l-.942.333c1.155 3.275 1.777 6.105 2.016 8.345.24 2.26.084 3.862-.26 4.72l.93.371ZM21.036 4.006c-1.8-1.254-3.699-1.646-5.483-1.836l-.106.994c1.716.183 3.418.549 5.017 1.663l.572-.82Zm-6-1.525-1.167 2.917.929.371 1.166-2.917-.928-.37Zm-7.62 15.352c0 .196-.07.49-.218.85-.144.35-.344.725-.563 1.07-.22.345-.451.645-.649.852-.1.105-.18.174-.238.213-.073.05-.054.015.031.015v1c.225 0 .415-.108.534-.19.135-.092.27-.214.396-.347.255-.267.524-.623.769-1.006.245-.385.475-.813.645-1.228.167-.405.294-.84.294-1.229h-1Zm-1.637 3c-.638 0-1.304-.377-1.935-1.017-.623-.632-1.149-1.457-1.502-2.198l-.903.43c.388.815.973 1.74 1.693 2.47.71.72 1.618 1.315 2.647 1.315v-1Zm-3.42-3.178c-.33-.861-.478-2.469-.249-4.73.228-2.242.82-5.073 1.92-8.349l-.947-.318c-1.12 3.335-1.732 6.24-1.967 8.567-.234 2.308-.105 4.104.308 5.186l.934-.356ZM3.851 4.82c1.52-1.111 3.049-1.474 4.703-1.656l-.11-.994c-1.74.191-3.465.587-5.183 1.843l.59.807Zm4.184-1.968L9.202 5.77l.929-.371L8.964 2.48l-.928.371Z"></path>
                            </svg>
                        </a>
                        <a href="https://id.pinterest.com/laufey/"
                            class="m-2 text-white" target="_blank"
                            class="stretched-link"
                            style="text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" class="sc-gKsewC khwrDj"
                                width="30" height="30">
                                <title>Pinterest</title>
                                <path fill="white"
                                    d="M7.615,23a.522.522,0,0,1-.11-.012.5.5,0,0,1-.386-.429l-.166-1.4A12.6,12.6,0,0,1,7,17.381c.205-.882,1.223-5.2,1.432-6.091a5.332,5.332,0,0,1-.348-1.907c0-1.992,1.219-3.552,2.776-3.552A2.07,2.07,0,0,1,12.956,8.1a10.218,10.218,0,0,1-.6,2.723c-.161.523-.328,1.06-.454,1.584a1.3,1.3,0,0,0,.225,1.133,1.441,1.441,0,0,0,1.15.525c2,0,3.452-2.209,3.452-5.252A4.482,4.482,0,0,0,11.969,4.2,4.957,4.957,0,0,0,6.79,9.155a4.7,4.7,0,0,0,.457,1.963.873.873,0,0,1,.063.584l-.428,1.816a.79.79,0,0,1-.515.571.813.813,0,0,1-.776-.139A6.575,6.575,0,0,1,3.472,9.1c0-3.9,2.756-8.1,8.807-8.1,4.7,0,8.249,3.337,8.249,7.762,0,4.743-3.017,8.321-7.018,8.321a4.281,4.281,0,0,1-2.635-.9l-.543,2.069a14.305,14.305,0,0,1-1.62,3.435l-.673,1.079A.5.5,0,0,1,7.615,23ZM10.862,6.831c-.995,0-1.776,1.121-1.776,2.552a4.149,4.149,0,0,0,.322,1.642.514.514,0,0,1,.037.334s-1.24,5.264-1.468,6.246a11.938,11.938,0,0,0-.034,3.422A12.932,12.932,0,0,0,9.364,18l.787-2.993a.5.5,0,0,1,.43-.37.51.51,0,0,1,.5.269,2.849,2.849,0,0,0,2.43,1.177c3.431,0,6.018-3.148,6.018-7.321C19.528,4.907,16.412,2,12.279,2,6.916,2,4.472,5.682,4.472,9.1a5.769,5.769,0,0,0,1.514,3.859l.351-1.492A5.224,5.224,0,0,1,5.79,9.155,5.937,5.937,0,0,1,11.969,3.2a5.438,5.438,0,0,1,5.755,5.61c0,3.623-1.872,6.252-4.452,6.252a2.44,2.44,0,0,1-1.936-.9,2.283,2.283,0,0,1-.412-1.987c.132-.545.3-1.1.472-1.646a9.754,9.754,0,0,0,.56-2.427A1.11,1.11,0,0,0,10.862,6.831Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="d-flex justify-content-center align-items-center mt-3 mb-5">
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
