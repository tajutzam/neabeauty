@extends('layouts.app')

@section('content')

<!-- ===== VISI SECTION (SUPER LARGE FULLSCREEN HERO) ===== -->
<section id="visi" 
         class="d-flex align-items-center" 
         style="
            min-height: 100vh; 
            background: #ffe3ef; 
            padding: 60px 0;
         ">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Gambar SUPER BESAR -->
      <div class="col-lg-5 text-center mb-5 mb-lg-0">
        <img src="{{ Vite::asset('../resources/images/header.png') }}" 
             alt="headers"
             class="img-fluid"
             style="
                max-width: 500px; 
                filter: drop-shadow(0 10px 20px rgba(0,0,0,0.15));
             ">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center text-center">

        <!-- Heading Utama -->
        <h1 class="fw-bold mb-4"
            style="
                color:#cc2f6f;
                font-size:60px;
                line-height:1.1;
                text-transform:uppercase;
                text-align: left;
            ">
          No. 1 Indonesia
        </h1>

        <!-- Deskripsi -->
        <p style="
            font-size:28px; 
            color:#333; 
            line-height:1.45; 
            font-weight:500;
            margin-bottom:25px;
        ">
            Pertama di Indonesia  
            <br><strong>TISSUE BISA DICUCI 7 KALI</strong>
            <br>Neabeauty Premium Lap Serbaguna
        </p>

        <!-- Highlight -->
        <p style="
            font-size:30px; 
            color:#cc2f6f; 
            font-weight:700; 
            margin-top:10px;
        ">
            Pilihan Keluarga ❤️
        </p>

      </div>

    </div>
  </div>
</section>
<!-- ===== END VISI SECTION ===== -->


<!-- ===== 4 ALASAN MEMILIH NEA BEAUTY ===== -->
<section id="alasan" style="background:#fff; padding: 60px 0;">
  <div class="container text-center">

    <h2 class="fw-bold mb-4" 
        style="color:#cc2f6f; font-size:55px;">
      Mengapa Memilih Nea Beauty?
    </h2>

    <div class="row justify-content-center g-5">

      <!-- ALASAN 1 -->
      <div class="col-md-6 col-lg-3 d-flex justify-content-center">
        <div class="p-5 rounded-4 text-center"
             style="background:#ffe3ef; border:3px solid #ffb6cf; width:100%; max-width:380px;">
          <img src="{{ Vite::asset('../resources/images/tisu3.png') }}" 
               style="width:120px; margin-bottom:25px;">
          <h4 style="color:#cc2f6f; font-weight:800; font-size:30px;">Bisa Dicuci 7x</h4>
          <p style="color:#444; margin-top:15px; font-size:20px; line-height:1.6;">
            Tidak mudah sobek, kuat meskipun dipakai berulang kali.
          </p>
        </div>
      </div>

      <!-- ALASAN 2 -->
      <div class="col-md-6 col-lg-3 d-flex justify-content-center">
        <div class="p-5 rounded-4 text-center"
             style="background:#ffe3ef; border:3px solid #ffb6cf; width:100%; max-width:380px;">
          <img src="{{ Vite::asset('../resources/images/tisu.png') }}" 
               style="width:120px; margin-bottom:25px;">
          <h4 style="color:#cc2f6f; font-weight:800; font-size:30px;">Premium Quality</h4>
          <p style="color:#444; margin-top:15px; font-size:20px; line-height:1.6;">
            Tekstur lembut, aman untuk kulit sensitif, dan tidak mudah rusak.
          </p>
        </div>
      </div>

      <!-- ALASAN 3 -->
      <div class="col-md-6 col-lg-3 d-flex justify-content-center">
        <div class="p-5 rounded-4 text-center"
             style="background:#ffe3ef; border:3px solid #ffb6cf; width:100%; max-width:380px;">
          <img src="{{ Vite::asset('../resources/images/tisu2.png') }}" 
               style="width:120px; margin-bottom:25px;">
          <h4 style="color:#cc2f6f; font-weight:800; font-size:30px;">Hemat & Awet</h4>
          <p style="color:#444; margin-top:15px; font-size:20px; line-height:1.6;">
            Satu produk bisa menggantikan banyak tisu biasa.
          </p>
        </div>
      </div>

      <!-- ALASAN 4 -->
      <div class="col-md-6 col-lg-3 d-flex justify-content-center">
        <div class="p-5 rounded-4 text-center"
             style="background:#ffe3ef; border:3px solid #ffb6cf; width:100%; max-width:380px;">
          <img src="{{ Vite::asset('../resources/images/tisu 7.png') }}" 
               style="width:120px; margin-bottom:25px;">
          <h4 style="color:#cc2f6f; font-weight:800; font-size:30px;">Serbaguna</h4>
          <p style="color:#444; margin-top:15px; font-size:20px; line-height:1.6;">
            Cocok untuk dapur, mobil, makeup, bayi.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===== END 4 ALASAN ===== -->


<!-- ===== PRODUK TERBARU ===== -->
<section style="padding: 40px 0; background:#fff;">
  <div class="container">


    <!-- HEADER -->
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 style="color:#cc2f6f; font-size:48px; font-weight:700; margin:0;">
        Produk Terbaru
      </h2>

      <a href="{{ route('katalog') }}"
         class="text-decoration-none fw-semibold"
         style="color:#cc2f6f; font-size:18px;">
        Lihat Selengkapnya
        <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

    <!-- GRID PRODUK -->
    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <a href="/katalog" class="text-decoration-none text-dark">
          <div class="card h-100">
            <img src="{{ Vite::asset('../resources/images/produk 1.png') }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Neabeauty Lap Serbaguna 575 Sheet</h5>
              <p class="card-text">Rp 65.000</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="/katalog" class="text-decoration-none text-dark">
          <div class="card h-100">
            <img src="{{ Vite::asset('../resources/images/produk 2.png') }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Neabeauty Non Lipat / NBN</h5>
              <p class="card-text">Rp 70.000</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="/katalog" class="text-decoration-none text-dark">
          <div class="card h-100">
            <img src="{{ Vite::asset('../resources/images/produk 3.png') }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Neabeauty Jumbopack 1kg</h5>
              <p class="card-text">Rp 185.000</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="/katalog" class="text-decoration-none text-dark">
          <div class="card h-100">
            <img src="{{ Vite::asset('../resources/images/produk 4.png') }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Neabeauty Lipat 175 Sheet</h5>
              <p class="card-text">Rp 35.000</p>
            </div>
          </div>
        </a>
      </div>

    </div>

  </div>
</section>



<!-- ===== GALLERY ===== -->
<section class="gallery-section">
  <div class="container">
    <h2 class="gallery-title">Gallery</h2>
    <div class="gallery-grid">
      <img src="{{ Vite::asset('../resources/images/gallery1 (1).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (2).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (3).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (4).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (5).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (6).png') }}">
      <img src="{{ Vite::asset('../resources/images/gallery1 (7).png') }}">
      <img src="{{ Vite::asset('../resources/images/tisu 4.png') }}">
    </div>
  </div>
</section>


 <!-- FOOTER -->
    <footer class="pt-5 pb-4 mt-5" style="background:#cc2f6f ; color : white ;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">
                        <img src="{{ Vite::asset('../resources/images/logo.png') }}" 
                             alt="Logo" style="height: 28px;" class="me-2">
                        Nea Beauty
                    </h5>
                    <p class="text-white-50">
                        Nea Beauty menyediakan berbagai produk tisu yang sesuai dengan kebutuhan dapur anda
                    </p>
                </div>

                <div class="col-md-2 mb-4">
                    <h6 class="fw-bold">Menu</h6>
                    <ul class="list-unstyled mt-3">
                        <li><a href="{{ route('shop') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                        <li><a href="{{ route('katalog') }}" class="text-white-50 text-decoration-none">Katalog</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Promo</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Hubungi Kami</h6>
                    <ul class="list-unstyled mt-3 text-white-50">
                        <li><i class="bi bi-geo-alt"></i> Mojokerto, Indonesia</li>
                        <li><i class="bi bi-phone"></i> +62 812-3456-7890</li>
                        <li><i class="bi bi-envelope"></i> support@neabeauty.com</li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Ikuti Kami</h6>
                    <div class="mt-3 d-flex gap-3">
                        <a href="#" class="text-light fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light fs-5"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>

            <hr class="border-secondary mt-4">

            <div class="text-center text-white mt-3">
                © {{ date('Y') }} Nea Beauty. All rights reserved.
            </div>
        </div>
    </footer>


@endsection
