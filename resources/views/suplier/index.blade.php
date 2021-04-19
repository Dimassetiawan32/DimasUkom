@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center">Admin</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{asset('images/download.jpg')}}" class="rounded-circle" height="80" widht="80px" alt="">
                    <p class="font-weight-bold text-center pt-2">SteveJobs</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">stevejobs@gmail.com
                    <a href="" class="btn btn-outline-primary btn-sm btn-block">Invite Member</a>
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
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Data Suplier
            </h3>
        </div>
        <div class="card-body">
          <h5 class="text-muted">Cari laporan Suplier</h5>
            <div class="form-row pt-2">
                <div class="form-group col-md-3">
                    <input type="text" name="" class="form-control" id="">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="" class="form-control" id="">
                </div>
            </div>
            <a href=""  class="btn btn-primary btn-sm">Cari Laporan</a>
            <a href=""  class="btn btn-success btn-sm">Tambah Stock</a>
        </div>
        <div class="container">
            <div class="pt-2">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Kode Suplier</th>
                            <th>Nama Suplier</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>fas</td>
                            <td>dsada</td>
                            <td>dfsf</td>
                            <td>fdsfs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection