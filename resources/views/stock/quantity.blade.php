@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center">Admin Gudang</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <p class="font-weight-bold text-center pt-2">SteveJobs</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">stevejobs@gmail.com
                    <a href="" class="btn btn-primary btn-sm btn-block">Invite Member</a>
                </p>
                <div class="d-flex justify-content-center" style="margin-top:-20px;">
                    <p class="font-weight-bold text-center px-4" style="margin-top:15px;">+62 xxxxxxx</p>
                </div>
                 <div class="d-flex justify-content-center" style="margin-top:-15px;">
                    <p class="font-weight-bold text-center px-4" style="margin-top:15px;">Jakarta No.29</p>
                </div>
            </article>
        </section>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    <ol class="breadcrumb bg-success">
                        <li class="breadcrumb-item active" aria-current="page">
                            <h6 class="text-light">Perhatian !!</h6>
                            <h6 class="text-light">Masukan data barang dengan lengkap dan benar</h6>
                        </li>
                    </ol>
                </div>
                <div class="pt-2">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <form action="{{route('stock.update.quantity', $stockbarang->id)}}" method="POST">
                               @csrf
                               @method('PATCH')
                                <div class="mb-3 pt-2">
                                    <h5 class="font-weight-bold">Edit Barang</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kode Barang</label>
                                            <input type="text" name="kode_barang" class="form-control" value="{{$stockbarang->kode_barang}}" id="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nama Barang</label>
                                            <input type="text" name="nama" class="form-control" value="{{$stockbarang->nama}}" id="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Harga</label>
                                            <input type="text" name="harga" class="form-control" value="{{$stockbarang->harga}}" id="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Suplier</label>
                                            @foreach($suplier as $suplier)
                                                <input type="text" name="suplier_id" class="form-control" value="{{$suplier->nama}}" id="" readonly>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Quantity</label>
                                            <input type="text" name="quantity" class="form-control" id="">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">save</button>
                                <a href="{{route('stock.index')}}" class="btn btn-secondary btn-sm">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()