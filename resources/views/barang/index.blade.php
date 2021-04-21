@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Daftar Barang
        </div>
        <hr>
        @csrf
        <div class="container">
            <div class="pt-2">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Suplier</th>
                            <th>Nama Barang</th>
                            <th>Phone</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                         @forelse($stockbarangs as $stockbarang)
                            <td>{{$stockbarang->kode_barang}}</td>
                            <td>{{$stockbarang->suplier->nama}}</td>
                            <td>{{$stockbarang->nama}}</td>
                            <td>{{$stockbarang->suplier->phone}}</td>
                            <td>{{$stockbarang->quantity}}</td>
                            <td>
                                <a href="{{route('barang.create', $stockbarang->id)}}" class="btn btn-success btn-sm">Buat Request</a>
                            </td>
                        </tr>
                         @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Maaf Data Belum Tersedia.
                                    </td>
                                </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection