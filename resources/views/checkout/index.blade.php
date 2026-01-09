@extends('layouts.app')

@section('content')
<div class="product-section">
    <div class="container py-5">
        @foreach ($barang as $barang)
        <div class="row justify-content-center">

            <!-- Image -->
            <div class="col-md-5">
                <div class="product-image-card">
                    <img src="{{ asset($barang->gambar) }}" class="product-image" alt="Gambar Produk">
                </div>
            </div>

            <!-- Details -->
            <div class="col-md-6">
                <div class="product-info">

                    <h1 class="product-title">{{ $barang->Nama_Barang }}</h1>

                    <p class="product-price">
                        Rp {{ number_format($barang->Harga_Barang, 0, ',', '.') }}
                    </p>

                    <!-- Description with box -->
                    <div class="description-box">
                        <p class="product-description">
                            {{ $barang->Deskripsi_Barang }}
                        </p>
                    </div>

                    <div class="product-meta">
                        <span>Satuan:</span> <strong>{{ $barang->satuan->Nama_Satuan }}</strong>
                    </div>

                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>

<style>
    /* Background */
    .product-section {
        background: linear-gradient(to bottom, #fdf2f5 0%, #f9e6ed 100%);
        min-height: 100vh;
    }

    /* Image Card */
    .product-image-card {
        background: #ffffff;
        padding: 18px;
        border-radius: 14px;
        box-shadow: 0px 6px 14px rgba(0,0,0,0.07);
        transition: 0.3s ease;
    }

    .product-image-card:hover {
        transform: translateY(-3px);
    }

    .product-image {
        width: 100%;
        max-height: 320px;
        object-fit: contain;
        border-radius: 10px;
    }

    /* Product Info */
    .product-info {
        padding-left: 20px;
    }

    .product-title {
        font-size: 30px;
        font-weight: 700;
        color: #c44f67;
    }

    /* Bigger price */
    .product-price {
        font-size: 30px;
        font-weight: 700;
        color: #d94b6a;
        margin-bottom: 25px;
    }

    /* Description Box */
    .description-box {
        background: #ffffff;
        border: 1px solid #f3bcca;
        padding: 15px 18px;
        border-radius: 12px;
        margin-bottom: 25px;
        box-shadow: 0px 3px 8px rgba(0,0,0,0.05);
    }

    .product-description {
        font-size: 16px;
        line-height: 1.7;
        color: #5b5b5b;
        margin: 0;
    }

    /* Satuan badge */
    .product-meta {
        background: #ffe9f0;
        padding: 10px 15px;
        border-radius: 8px;
        border: 1px solid #f5c9d5;
        font-size: 15px;
        color: #6a6a6a;
        display: inline-block;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-image { max-height: 250px; }
        .product-title { font-size: 24px; }
        .product-price { font-size: 24px; }
    }
</style>
@endsection
