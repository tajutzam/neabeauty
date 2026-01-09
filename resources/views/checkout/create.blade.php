@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Form Pembelian</h2>
    <form id="checkoutForm" action="{{ route('checkout.store') }}" method="POST" class="form-horizontal">
        @csrf

        <!-- Profile Section -->
        <div class="form-group row">
            <label for="profile_name" class="col-sm-3 col-form-label">Nama Profile</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="profile_name" name="profile_name" value="{{ Auth::user()->name }}" readonly>
            </div>
        </div>

        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <!-- Product Details Section -->
        <div class="form-group row">
            <label for="product_name" class="col-sm-3 col-form-label">Nama Barang</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->Nama_Barang }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="product_price" class="col-sm-3 col-form-label">Harga Barang</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="product_price" name="product_price" value="Rp {{ number_format($product->Harga_Barang, 0, ',', '.') }}" readonly>
            </div>
        </div>

        <!-- Quantity Section -->
        <div class="form-group row">
            <label for="quantity" class="col-sm-3 col-form-label">Jumlah Produk</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
            </div>
        </div>

        <!-- Address Section -->
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
        </div>

        <!-- Payment Method Section -->
        <div class="form-group row">
            <label for="payment_method" class="col-sm-3 col-form-label">Metode Pembayaran</label>
            <div class="col-sm-9">
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="">-- Pilih Metode --</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="kartu_kredit">Kartu Kredit</option>
                    <option value="cod">Cash on Delivery (COD)</option>
                </select>
            </div>
        </div>

        <!-- Transfer Bank Section -->
        <div id="transfer_bank_section" class="mt-4" style="display:none;">
            <div class="alert alert-info">
                <h5>Kode Pembayaran:</h5>
                <p><strong>#{{ strtoupper(uniqid('PAY')) }}</strong></p>
                <p>Silakan transfer ke rekening BCA 123-456-7890 a.n Nea Beauty</p>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="transfer_confirm">
                    <label class="form-check-label" for="transfer_confirm">
                        Saya sudah melakukan transfer
                    </label>
                </div>
            </div>
        </div>

        <!-- Kartu Kredit Section -->
        <div id="kartu_kredit_section" class="mt-4" style="display:none;">
            <div class="card p-4 border">
                <div class="form-group mb-3">
                    <label for="card_number">Nomor Kartu Kredit</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="1234 5678 9012 3456">
                </div>
                <div class="form-group mb-3">
                    <label for="expiry">Tanggal Expired (MM/YY)</label>
                    <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/YY">
                </div>
                <div class="form-group mb-3">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group row mt-4">
            <div class="col-sm-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-primary btn-lg" disabled>Beli Sekarang</button>
            </div>
        </div>
    </form>
</div>

<script>
    const paymentSelect = document.getElementById('payment_method');
    const transferSection = document.getElementById('transfer_bank_section');
    const kartuSection = document.getElementById('kartu_kredit_section');
    const submitBtn = document.getElementById('submitBtn');
    const transferConfirm = document.getElementById('transfer_confirm');
    const cardNumber = document.getElementById('card_number');
    const expiry = document.getElementById('expiry');
    const cvv = document.getElementById('cvv');

    function updateSubmitButton() {
        const method = paymentSelect.value;
        if(method === 'transfer_bank') {
            submitBtn.disabled = !transferConfirm.checked;
        } else if(method === 'kartu_kredit') {
            submitBtn.disabled = !(cardNumber.value && expiry.value && cvv.value);
        } else if(method === 'cod') {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }

    paymentSelect.addEventListener('change', function() {
        const method = this.value;
        transferSection.style.display = method === 'transfer_bank' ? 'block' : 'none';
        kartuSection.style.display = method === 'kartu_kredit' ? 'block' : 'none';
        updateSubmitButton();
    });

    transferConfirm?.addEventListener('change', updateSubmitButton);
    [cardNumber, expiry, cvv].forEach(input => {
        input?.addEventListener('input', updateSubmitButton);
    });
</script>
@endsection
