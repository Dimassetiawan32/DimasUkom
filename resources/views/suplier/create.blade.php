@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center">Admin</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{asset('images/download.jpg')}}" class="rounded-circle" height="80" width="80px" alt="">
                    <p class="font-weight-bold text-center pt-2">SteveJobs</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">stevejobs@gmail.com
                    <a href="" class="btn btn-primary btn-sm btn-block">Invite Member</a>
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
                            <h6 class="text-light">Masukan data suplier dengan lengkap dan benar</h6>
                        </li>
                    </ol>
                </div>
                <div class="pt-2">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <form action="{{route('suplier.save')}}" method="POST">
                                @csrf
                                <div class="mb-3 pt-2">
                                    <h5 class="font-weight-bold">Tambah Suplier Baru</h5>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nama Suplier</label>
                                            <input type="text" name="nama" class="form-control" id="" placeholder="Masukan Nama Suplier">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="email" class="form-control" id="" placeholder="Masukan Email Suplier">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Telp</label>
                                            <input type="number" name="phone" class="form-control" id="" placeholder="Masukan No.Telp Suplier">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">save</button>
                                <a href="{{route('suplier.index')}}" class="btn btn-secondary btn-sm">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()