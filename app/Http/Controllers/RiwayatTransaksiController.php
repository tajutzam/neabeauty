<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Auth;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        $riwayat = Pembelian::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('transaksi.riwayat', compact('riwayat'));
    }
}
