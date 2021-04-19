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
                            <td>fas</td>
                            <td>dsada</td>
                            <td>dfsf</td>
                            <td>fdsfs</td>
                            <td>fsda</td>
                            <td>
                                <a href="{{route('barang.create')}}" class="btn btn-success btn-sm">Buat Request</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection