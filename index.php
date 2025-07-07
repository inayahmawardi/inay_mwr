<?php
$title = "Beranda";
include "header.php";
?>


      <div class="container mt-5">
        <div class="container mt-5">
          <!-- Hero Section -->
          <div class="row align-items-center">
            <div class="col-md-6 hero" data-aos="fade-right">
              <div class="profile-decoration">
                <!-- Profile Text -->
                <h1 class="display-4 fw-bold">Halo!</h1>
                <h1 class="display-4 fw-bold">Saya Inayah Ainina Mawardi</h1>
                <p class="lead">Seorang Web Developer yang bersemangat membangun aplikasi modern, interaktif, dan responsif menggunakan teknologi web terbaru.</p>
                <a href="#portofolio" class="btn btn-primary btn-lg mt-3">Lihat Proyek Saya</a>
              </div>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left">
              <div class="profile-wrapper">
                <div class="profile-photo">
                  <img src="assets/img/profile.jpg" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="max-width: 300px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- Tentang Saya -->
<section class="mt-5" data-aos="fade-up">
  <h2 class="text-center mb-4">Tentang Saya</h2>
  <p class="text-center px-4">Saya adalah mahasiswa Sistem Informasi yang 
    antusias dan berdedikasi untuk terus mengembangkan keterampilan 
    di bidang teknologi informasi. Saat ini saya fokus mendalami pemrograman, 
    manajemen basis data, analisis bisnis, dan keamanan informasi. Saya memiliki 
    ketertarikan khusus pada pengembangan perangkat lunak dan analisis data,
     serta berkomitmen untuk terus belajar dan berkontribusi dalam dunia digital 
     yang terus berkembang..</p>
</section>

<div class="section-divider"></div> <!-- Divider -->

<!-- Proyek Terbaru -->
<section id="portofolio" class="mt-5">
  <h2 class="text-center mb-4" data-aos="zoom-in">Proyek Terbaru</h2>
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
      <div class="card h-100 shadow-lg border-0">
        <img src="assets/img/avidburger_erp.png" class="card-img-top" alt="ERP Avid Burger">
        <div class="card-body">
          <h5 class="card-title">Aplikasi ERP Penjualan PT. Avid Burger</h5>
          <p class="card-text">
            Aplikasi ERP berbasis web untuk restoran cepat saji yang mengelola penjualan, bahan baku, pemasok, pelanggan, dan laporan keuangan. Dibangun dengan PHP & MySQL menggunakan XAMPP.
          </p>
          <div class="d-flex flex-wrap mb-2">
            <span class="badge bg-warning text-dark me-1">PHP</span>
            <span class="badge bg-info text-dark me-1">MySQL</span>
            <span class="badge bg-secondary me-1">XAMPP</span>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAvidBurger">Lihat Detail</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 shadow-lg border-0">
        <img src="img/project2.jpg" class="card-img-top" alt="Project 2">
        <div class="card-body">
          <h5 class="card-title">Website Laundry</h5>
          <p class="card-text">Website pemesanan laundry online dengan fitur jadwal pickup dan pelacakan pesanan.</p>
          <div class="d-flex flex-wrap mb-2">
            <span class="badge bg-info text-dark me-1">PHP</span>
            <span class="badge bg-warning text-dark me-1">Bootstrap</span>
            <span class="badge bg-dark me-1">MySQL</span>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalWebsiteLaundry">Lihat Detail</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card h-100 shadow-lg border-0">
        <img src="img/project3.jpg" class="card-img-top" alt="Project 3">
        <div class="card-body">
          <h5 class="card-title">Mobile Posyandu</h5>
          <p class="card-text">Aplikasi mobile berbasis Firebase yang membantu pencatatan imunisasi dan perkembangan anak.</p>
          <div class="d-flex flex-wrap mb-2">
            <span class="badge bg-danger me-1">Flutter</span>
            <span class="badge bg-success me-1">Firebase</span>
            <span class="badge bg-primary me-1">Android</span>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal untuk Proyek -->
  <div class="modal fade" id="modalAvidBurger" tabindex="-1" aria-labelledby="modalAvidBurgerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAvidBurgerLabel">Detail Proyek: Aplikasi ERP Penjualan PT. Avid Burger</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div id="carouselAvidBurger" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/avidburger_erp.png" class="d-block w-100" alt="ERP Avid Burger 1">
              </div>
              <div class="carousel-item">
                <img src="assets/img/avidburger_erp1.png" class="d-block w-100" alt="ERP Avid Burger 2">
              </div>
              <div class="carousel-item">
                <img src="assets/img/avidburger_erp2.png" class="d-block w-100" alt="ERP Avid Burger 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAvidBurger" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAvidBurger" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Selanjutnya</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Sertifikat & Pelatihan Section -->
<section id="sertifikat" class="mt-5">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">Sertifikat & Pelatihan</h2>
    <div class="row">
      <!-- Sertifikat 1 -->
      <div class="col-md-6 mb-4" data-aos="fade-right">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title">Belajar Dasar Pemrograman Python</h5>
            <p class="card-text"><strong>Platform:</strong> Dicoding</p>
            <p class="card-text"><strong>Tanggal:</strong> Januari 2024</p>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sertifikatPython">
              Lihat Sertifikat
            </button>
          </div>
        </div>
      </div>

      <!-- Sertifikat 2 -->
      <div class="col-md-6 mb-4" data-aos="fade-left">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title">Guide to Learn SQL with AI</h5>
            <p class="card-text"><strong>Platform:</strong> DQLab</p>
            <p class="card-text"><strong>Nama:</strong> Inayah Ainina Mawardi</p>
            <p class="card-text"><strong>Kode Sertifikat:</strong> DQLABAI003IDMNUF</p>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sertifikatDQLab">
              Lihat Sertifikat
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sertifikat Python -->
    <div class="modal fade" id="sertifikatPython" tabindex="-1" aria-labelledby="sertifikatPythonLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sertifikatPythonLabel">Sertifikat - Belajar Dasar Pemrograman Python</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body text-center">
            <img src="URL-GAMBAR-SERTIFIKAT-KAMU.jpg" alt="Sertifikat Python" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sertifikat DQLab -->
    <div class="modal fade" id="sertifikatDQLab" tabindex="-1" aria-labelledby="sertifikatDQLabLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sertifikatDQLabLabel">Sertifikat - Guide to Learn SQL with AI</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/sql.png" alt="Sertifikat DQLab - SQL with AI" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


</div>

<?php include "footer.php"; ?>
