@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <ol class="breadcrumb bg-success">
                    <li class="breadcrumb-item active" aria-current="page">
                        <h6 class="text-light">Perhatian !!</h6>
                        <h6 class="text-light">Masukan semua informasi dibawah ini dengan lengkap dan benar</h6>
                    </li>
                </ol>
            </div>
            <div class="pt-2">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <form action="{{route('barang.save.request', $stockbarangs->id)}}" method="POST">
                            @csrf
                            <div class="mb-3 pt-2">
                                <h5 class="font-weight-bold">Data Pribadi</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" name="email" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Telp</label>
                                        <input type="text" name="telp" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 pt-2">
                                <h5 class="font-weight-bold">Detail Permintaan</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" name="stockbarang_id" class="form-control" id="" value="{{$stockbarangs->nama}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jumlah Stock</label>
                                        <input type="text" name="stockbarang_id" class="form-control" id="" value="{{$stockbarangs->quantity}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jumlah Permintaan</label>
                                        <input type="text" name="jumlah" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim Permintaan</button>
                            <a href="{{route('barang.index')}}" class="btn btn-secondary btn-sm">cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()