<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function index()
    {
        $pembelis = Pembeli::orderBy('nama_pembeli', 'asc')->get();
        $mobils = Mobil::orderBy('kode_mobil', 'asc')->get();
        return view('transaction.index', compact('pembelis', 'mobils'));
    }
}
