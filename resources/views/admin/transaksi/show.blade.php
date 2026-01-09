@extends('layouts.appadmin')
@section('content')
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#ProductTable').DataTable();

                $('#sidebarToggleTop').on('click', function() {
                    setTimeout(function() {
                        table.columns.adjust().draw();
                    }, 300);

                    var sidebarWidth = $('#accordionSidebar').width();
                    if (sidebarWidth === 0) {
                        table.columns.adjust().draw();
                    }
                });
            });
        </script>
    @endpush

    <!-- STYLE PINK -->
    <style>
        .detail-container {
            background-image: url('https://i.pinimg.com/564x/7b/37/41/7b3741fd1dd011dfa9e6eef8358b8d26.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .detail-card {
            background-color: rgba(255, 240, 245, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.25);
            padding: 25px;
            border: 1px solid rgba(255, 182, 193, 0.6);
        }

        .detail-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .detail-card h4,
        .detail-card h5 {
            color: #c2185b;
        }

        .detail-card hr {
            border-top: 2px solid rgba(255, 105, 180, 0.4);
        }

        .detail-card .form-label {
            color: #ad1457;
        }

        .detail-card .btn {
            background-color: #f48fb1;
            border: none;
            color: white;
            font-weight: bold;
        }

        .detail-card .btn:hover {
            background-color: #ec407a;
        }
    </style>

    <div id="wrapper">
        @include('layouts.navadmin')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto"></ul>
                </nav>

                <div class="container-fluid detail-container">
                    <div class="row justify-content-center">
                        <div class="p-5 rounded-3 border col-xl-6 detail-card">
                            <div class="mb-3">
                                <h4 style="text-align: center">Detail Transaksi</h4>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="kode" class="form-label"><strong>Pembeli</strong></label>
                                    <h5>{{ $transaksi->nama_profile }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="nama" class="form-label"><strong>Nama Barang</strong></label>
                                    <h5>{{ $transaksi->nama_barang }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="harga" class="form-label"><strong>Jumlah Barang</strong></label>
                                    <h5>{{ $transaksi->jumlah_produk }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="deskripsi" class="form-label"><strong>Harga Barang</strong></label>
                                    <h5>{{ $transaksi->harga_barang }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="satuan" class="form-label"><strong>Total Harga</strong></label>
                                    <h5>{{ $transaksi->total_harga }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="satuan" class="form-label"><strong>Alamat</strong></label>
                                    <h5>{{ $transaksi->alamat }}</h5>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="satuan" class="form-label"><strong>Metode Pembayaran</strong></label>
                                    <h5>{{ $transaksi->metode_pembayaran }}</h5>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12 d-grid">
                                    <a href="{{ route('admintransaksi.index') }}" class="btn btn-lg mt-3">
                                        <i class="bi-arrow-left-circle me-2"></i> Kembali
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
