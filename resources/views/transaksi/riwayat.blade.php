@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4 text-center fw-bold">🧾 Riwayat Transaksi</h3>

    @if($riwayat->count() > 0)
        <div class="row">
            @foreach($riwayat as $item)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold mb-0">
                                {{ $item->nama_barang }}
                            </h5>
                            <span class="badge bg-primary">
                                {{ strtoupper($item->metode_pembayaran) }}
                            </span>
                        </div>

                        <hr class="my-2">

                        <p class="mb-1">
                            <strong>Jumlah:</strong> {{ $item->jumlah_produk }}
                        </p>

                        <p class="mb-1">
                            <strong>Harga Satuan:</strong>
                            Rp {{ number_format($item->harga_barang, 0, ',', '.') }}
                        </p>

                        <p class="mb-2 text-success fw-bold">
                            Total:
                            Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                        </p>

                        <p class="text-muted mb-0" style="font-size: 13px;">
                            📅 {{ $item->created_at->format('d M Y, H:i') }}
                        </p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info text-center">
            Belum ada transaksi
        </div>
    @endif
</div>
@endsection
