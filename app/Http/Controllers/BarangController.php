<?php

namespace App\Http\Controllers;

use App\Riquest;
use App\Suplier;
use App\Stock;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Mail\NotifRequestBarang;

class BarangController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        $stockbarangs = Stock::all();
        return view('barang.index', compact('supliers', 'stockbarangs'));
    }

    public function create($id)
    {
        $stockbarangs = Stock::find($id);
        return view('barang.create', compact('stockbarangs'));
    }

    public function store(Request $request, $id)
    {
        $requests = Riquest::create([
            'stockbarang_id'    => $request->stockbarang_id,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'email'             => $request->email,
            'telp'              => $request->telp,
            'jumlah'            => $request->jumlah,

        ]);

        $req = Stock::find($id);
        $hitung = $req->quantity - $request->jumlah;
        $req->update([
            'quantity' => $hitung,
        ]);

        Nexmo::message()->send([
            'to'   => $request->telp,
            'from' => 'Dimas Setiawan',
            'text' => 'Terima Kasih Telah Membuat Permintaan Barang. Silahkan Tunggu Notifikasi Selanjutnya',
        ]);
        
        \Mail::to($request->email)->send(new NotifRequestBarang);

        $requests->save();
        toast('Request Berhasil','success');
        return redirect('barang/index');
    }

}
