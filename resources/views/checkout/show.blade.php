@extends('layouts.app')

@section('content')
<div class="product-page">
    <div class="container py-5">
        <div class="row justify-content-center gx-5">

            <!-- Product Image -->
            <div class="col-md-5 d-flex justify-content-center">
                <div class="image-card">
                    <img src="{{ asset($barang->gambar) }}" alt="Gambar Barang" class="product-img">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <div class="product-info">

                    <h1 class="product-title">{{ $barang->Nama_Barang }}</h1>

                    <p class="product-price">
                        Rp {{ number_format($barang->Harga_Barang, 0, ',', '.') }}
                    </p>

                    <!-- Satuan setelah harga -->
                    <div class="product-meta mb-4">
                        <span>Satuan :</span> <strong>{{ $barang->satuan->Nama_Satuan }}</strong>
                    </div>

                    <!-- Description Box -->
                    <h4 class="description-title mb-2">Deskripsi</h4>
                    <div class="description-box">
                        <p class="product-description">
                            {{ $barang->Deskripsi_Barang }}
                        </p>
                    </div>

                    <!-- Checkout Button -->
                    <a href="{{ route('checkout.create', ['product_id' => $barang->id]) }}" 
                       class="checkout-btn mt-4">
                        Checkout
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .product-page {
        background: linear-gradient(to bottom, #fef6f8, #fae6ee);
        min-height: 100vh;
    }

    /* Image wrapper */
    .image-card {
        background: #fff;
        padding: 16px;
        border-radius: 14px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        width: 90%;
        max-width: 360px;
        transition: 0.25s;
    }
    .image-card:hover {
        transform: translateY(-2px);
    }

    .product-img {
        width: 100%;
        border-radius: 10px;
        object-fit: contain;
        max-height: 330px;
    }

    .product-title {
        font-size: 30px;
        font-weight: 700;
        color: #c74362;
        margin-bottom: 10px;
        line-height: 1.25;
    }

    .product-price {
        font-size: 32px;
        font-weight: 800;
        color: #d94f6e;
        margin-bottom: 10px;
    }

    .product-meta {
        background: #ffff;
        border: 1px solid #efc4d3;
        padding: 9px 14px;
        border-radius: 8px;
        font-size: 14px;
        color: #6a6a6a;
        display: inline-block;
    }

    .description-box {
        background: #ffffff;
        border: 1px solid #ffff;
        padding: 18px 20px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        margin-bottom: 18px;
    }

    .product-description {
        margin: 0;
        font-size: 15.5px;
        color: #555;
        line-height: 1.65;
    }

    .checkout-btn {
        display: inline-block;
        background: #d94f6e;
        color: white;
        padding: 12px 26px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.25s;
    }
    .checkout-btn:hover {
        background: #c24360;
    }

    @media (max-width: 768px) {
        .image-card {
            max-width: 290px;
        }
        .product-title {
            font-size: 24px;
        }
        .product-price {
            font-size: 24px;
        }
    }
</style>
@endsection
