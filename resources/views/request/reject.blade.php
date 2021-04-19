@extends('layouts.app')

@section('content')
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
</div>
<div class="container">
    <div class="pt-5">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Request
            </h3>
        </div>
        <hr>
        <div class="container">
            <div class="pt-2">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Kode request</th>
                            <th>Kode Barang</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>fas</td>
                            <td>dsada</td>
                            <td>dfsf</td>
                            <td>fdsfs</td>
                            <td>
                               <a href="" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection