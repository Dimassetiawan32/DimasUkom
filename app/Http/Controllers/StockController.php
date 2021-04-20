<?php

namespace App\Http\Controllers;

use App\Suplier;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        $stockbarangs = Stock::all();
        return view('stock.index', compact('supliers', 'stockbarangs'));
    }

    public function create()
    {
        $supliers = Suplier::all();
        return view('stock.create', compact('supliers'));
    }

    public function store(Request $request)
    {
        $stockbarangs = Stock::create([
            'suplier_id'    => $request->suplier_id,
            'nama'          => $request->nama,
            'harga'         => $request->harga,
            'quantity'      => $request->quantity,

        ]);

        $stockbarangs->save();
        toast('Barang Berhasil Ditambahkan','success');
        return redirect('stock/index');
    }

    public function edit($id)
    {
        $suplier = Suplier::all();
        $stockbarang = Stock::findOrFail($id);
        return view('stock.edit', compact('suplier','stockbarang'));
    }

    public function update(Request $request, $id)
    {
        $stockbarangs = Stock::find($id);
        $stockbarangs->update($request->all());
        toast('Barang Berhasil Diperbarui','success');
        return redirect('stock/index');
    }
}
