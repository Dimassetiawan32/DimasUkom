<?php

namespace App\Http\Controllers;

use App\Suplier;
use App\Stock;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        $stockbarangs = Stock::all();
        return view('barang.index', compact('supliers', 'stockbarangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $requests = Barang::create([
            'stockbarang_id'    => $request->stockbarang_id,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'email'             => $request->email,
            'telp'              => $request->telp,
            'jumlah'            => $request->jumlah,

        ]);

        $requests->save();
        toast('Request Berhasil','success');
        return redirect('barang/index');
    }
}
