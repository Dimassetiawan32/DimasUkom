<?php

namespace App\Http\Controllers;
use App\Suplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {

        $supliers = Suplier::create([
            'nama'       => $request->nama,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        $supliers->save();
        toast('Suplier Berhasil Ditambahkan','success');
        return redirect('suplier/index');
    }
}
