@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Pembelian Berhasil',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK'
    });
</script>
@endif

<style>
    /* Background merah muda lembut */
    .custom-background {
        background-color: #ffff
        min-height: 100vh;
        padding: 40px 0;
    }

    /* Card produk */
    .product-card {
        background: #ffffff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 6px 15px rgba(0,0,0,0.07);
        transition: 0.3s ease;
        border: 1px solid #f0c8d5;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 22px rgba(0,0,0,0.12);
    }

    /* Gambar produk */
    .product-img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        background-color: #f9e8ee;
    }

    .product-body {
        padding: 18px;
    }

    /* Judul barang */
    .product-title {
        font-size: 18px;
        font-weight: 600;
        color: #b94b63;
        margin-bottom: 6px;
    }

    /* Harga */
    .product-price {
        font-size: 17px;
        color: #e26b84;
        font-weight: 600;
        margin-bottom: 6px;
    }

    /* Deskripsi */
    .product-desc {
        font-size: 14px;
        color: #666;
        margin-bottom: 12px;
    }

    /* Tombol detail */
    .btn-detail {
        width: 100%;
        background-color: #e26b84;
        border: none;
        padding: 10px 0;
        color: white;
        font-weight: 600;
        border-radius: 10px;
        transition: 0.2s;
    }

    .btn-detail:hover {
        background-color: #c85a73;
        color: white;
    }
</style>

<div class="custom-background">
    <div class="container mt-4">
        <div class="row g-4">
            @foreach ($barang as $barang)
            <div class="col-md-4 col-12">
                <div class="product-card">

                    <img src="{{ asset($barang->gambar) }}" 
                         class="product-img"
                         alt="Gambar {{ $barang->Nama_Barang }}">

                    <div class="product-body">
                        <h5 class="product-title">{{ $barang->Nama_Barang }}</h5>

                        <p class="product-price">
                            Rp {{ number_format($barang->Harga_Barang, 0, ',', '.') }}
                            /{{ $barang->satuan->Nama_Satuan }}
                        </p>

                        <p class="product-desc">
                            {{ $barang->Deskripsi_Barang }}
                        </p>

                        <a href="{{ route('checkout.show', ['checkout' => $barang->id]) }}" 
                           class="btn btn-detail">
                           Lihat Detail
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="pt-5 pb-4 mt-5" style="background:#cc2f6f ; color : white ;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" 
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

</div>
@endsection
