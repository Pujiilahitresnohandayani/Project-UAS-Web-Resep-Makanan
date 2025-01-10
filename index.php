<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resep Makanan</title>
</head>
<body>
    <!-- Bagian Header -->
    <header>
        <div class="navbar">
            <!-- Logo Situs -->
            <div class="logo">
                <img src="../img/logo.png" alt="Logo">
            </div>

            <!-- Navigasi Utama -->
            <div class="navigation">
                <ul>
                    <li><a href="html/index.php">Resep Makanan</a></li>
                    <li><a href="html/kuliner.html">Kuliner</a></li>
                    <li><a href="html/blog.html">Blog</a></li>
                </ul>
            </div>

            <!-- Container untuk Tombol -->
            <div class="action-buttons">
                <!-- Perbaikan untuk include -->
                <?php include 'user_login_status.php'; ?>
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Bagian Hero -->
        <section class="hero__section">
            <div class="card">
                <h3>Temukan Resep Yang Anda Cari</h3>
            </div>
        </section>
        
        <!-- Slider untuk Menampilkan Gambar -->
        <section class="sliders">
            <div class="card">
                <img src="../img/slider1.png" alt="Slider 1">
            </div>
            <div class="card">
                <img src="../img/slider2.png" alt="Slider 2">
            </div>
            <div class="card">
                <img src="../img/slider3.png" alt="Slider 3">
            </div>
        </section>

        <!-- Menu Resep -->
        <section class="menu__resep">
            <div class="title">
                <div class="title_text">
                    <h3>Resep Kami</h3>
                </div>

                <!-- Form Pencarian Resep -->
                <div class="searchForm">
                    <input type="text" id="searchInput" placeholder="Cari Menu Makanan" onkeyup="filterRecipes()">
                </div>
            </div>

            <!-- Daftar Resep -->
            <div class="resep__content" id="recipeContainer">
                <!-- Kartu Resep -->
                <a href="html/detail_menu_sate.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="Logo">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan1.jpg" alt="Sate Ayam">
                        </div>
                        <div class="card__text">
                            <h3>Sate Ayam</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Soto Padang -->
                <a href="html/detail_menu_soto.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan2.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Soto Padang</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Mie Aceh -->
                <a href="html/detail_menu_mie.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan3.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Mie Aceh</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Gulai Kepala Ikan -->
                <a href="html/detail_menu_gulai.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan4.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Gulai Kepala Ikan</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Gulai Ikan Patin -->
                <a href="html/detail_menu_patin.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan5.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Gulai Ikan Patin</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Gulai Belacan -->
                <a href="html/detail_menu_belecan.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan6.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Gulai Belacan</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Gulai Itik Lado Mudo -->
                <a href="html/detail_menu_gulai_itik.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan7.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Gulai Itik Lado Mudo</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Dendeng Balado -->
                <a href="html/detail_menu_balado.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan8.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Dendeng Balado</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Rendang -->
                <a href="html/detail_menu_rendang.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan9.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Rendang</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Sate Padang -->
                <a href="html/detail_menu_sate_padang.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan10.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Sate Padang</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Ayam Betutu -->
                <a href="html/detail_menu_ayam.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan11.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Ayam Betutu</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Sate Lilit -->
                <a href="html/detail_menu_lilit.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan12.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Sate Lilit Khas Bali</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Sate Tahu Sayuran -->
                <a href="html/detail_menu_Sate Tahu dan Sayuran.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan13.png" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Sate Tahu Sayuran</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Ayam Kremes -->
                <a href="html/detail_menu_ayam kremes.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan14.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Ayam Kremes</h3>
                        </div>
                    </div>
                </a>
                <!-- Kartu Resep: Tahu Crispy -->
                <a href="html/detail_menu_tahu crispy.html">
                    <div class="card">
                        <div class="thumb">
                            <img src="../img/logo.png" alt="">
                        </div>
                        <div class="card__image">
                            <img src="../img/resep_makanan15.jpg" alt="">
                        </div>
                        <div class="card__text">
                            <h3>Tahu Crispy</h3>
                        </div>
                    </div>
            </div>
        </section>
        
        <!-- Bagian Footer -->
        <footer>
            <div class="card">
                <div class="logo">
                    <img src="../img/logo.png" alt="Logo Footer">
                </div>
            </div>
            <div class="card">
                <h3>Konten</h3>
                <ul>
                    <li><a href="">Resep</a></li>
                    <li><a href="">Resep Bahan Makanan</a></li>
                    <li><a href="">Kreasi Unik</a></li>
                    <li><a href="">Kreasi Pintar</a></li>
                    <li><a href="">Resep Makanan</a></li>
                </ul>
            </div>

            <div class="card">
                <h3>Tentang Kami</h3>
                <ul>
                    <li><a href="">Panduan Resep</a></li>
                    <li><a href="">Kebijakan Privasi</a></li>
                    <li><a href="">Syarat Dan Ketentuan</a></li>
                    <li><a href="">Masukan dan Bantuan</a></li>
                </ul>
            </div>
            
            <div class="card">
                <h3>Kontak</h3>
                <ul>
                    <li><a href="">012345678910</a></li>
                    <li><a href="">Bumbu</a></li>
                    <li><a href="">Resep Kreasi</a></li>
                    <li><a href="">Snack & Cemilan</a></li>
                </ul>
            </div>
        </footer>
    </main>

    <!-- Link ke file JavaScript eksternal -->
    <script src="script/script.js"></script>
</body>
</html>