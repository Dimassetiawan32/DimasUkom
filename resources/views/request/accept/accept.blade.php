@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center">suplier</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <p class="font-weight-bold text-center pt-2">Tailor Otwel</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">tayloretwel@gmail.com
                </p>
                <div class="d-flex justify-content-center" style="margin-top:-20px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:18px;" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <p class="font-weight-bold text-center px-4" style="margin-top:15px;">+62 xxxxxxx</p>
                </div>
                <div class="d-flex justify-content-center" style="margin-top:-15px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:18px;" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <p class="font-weight-bold text-center px-4" style="margin-top:15px;">Jakarta No.29</p>
                </div>
        </section>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="col-md-3">
                            <div class="card border shadow">
                                <div class="card-body d-flex">
                                    <h5 class="text-muted px-3 pt-3">Stock barang</h5>
                                    <h2 class="pt-2 ml-auto">210</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border shadow">
                                <div class="card-body d-flex">
                                    <h5 class="text-muted px-3 pt-3">Request</h5>
                                    <h2 class="pt-2 ml-auto">100</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border shadow">
                                <div class="card-body d-flex">
                                    <h5 class="text-muted px-2 pt-2">Permintaan Diterima</h5>
                                    <h2 class="pt-2 ml-auto">100</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border shadow">
                                <div class="card-body d-flex">
                                    <h5 class="text-muted px-2 pt-2">Permintaan Ditolak</h5>
                                    <h2 class="pt-2 ml-auto">100</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="pt-5">
                <div class="col-md-12">
                    <h3 class="text-primary font-weight-bold">
                        Request
                    </h3>
                    <a href="" class="btn btn-success btn-sm">Accept</a>
                    <a href="{{route('request.reject')}}" class="btn btn-danger btn-sm">Reject</a>
                </div>
                <hr>
                <!-- Admin Gudang -->
                @role('Gudang')
                <div class="card-body">
                    <h5 class="text-muted">Cari laporan request Accept</h5>
                    <div class="form-row pt-2">
                        <div class="form-group col-md-3">
                            <input type="text" name="" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" name="" class="form-control" id="">
                        </div>
                    </div>
                    <a href=""  class="btn btn-primary btn-sm">Cari Laporan</a>
                    <a href="{{route('stock.create')}}"  class="btn btn-success btn-sm">Tambah Stock</a>
                </div>
                @endrole
                <!-- Admin -->
                <div class="container">
                    <div class="pt-2">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Kode request</th>
                                    <th>Kode Barang</th>
                                    <th>Quantity</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                            @forelse($requests as $request)
                                <tr>
                                    <td>{{$request->kode_request}}</td>
                                    @foreach($stockbarangs as $stockbarang)
                                    <td>{{$stockbarang->kode_barang}}</td>
                                    @endforeach
                                    <td>{{$request->jumlah}}</td>
                                    <td>
                                        <span class="badge badge-success">Accept</span>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
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
    </div>
</div>
@endsection