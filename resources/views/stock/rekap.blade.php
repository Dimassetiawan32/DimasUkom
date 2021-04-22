@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <div class="d-flex">
                <h3 class="text-primary font-weight-bold px-3">
                    Laporan Suplier
                </h3>
                @if (request('tglawal'))
                    <h4 class="text-muted pt-1">
                     ({{ request('tglawal') }} sampai {{ request('tglakhir') }} )
                    </h4>
                @endif
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="pt-2">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($rekap as $stockbarang)
                            <tr>
                                <td>{{$stockbarang->kode_barang}}</td>
                                <td>{{$stockbarang->nama}}</td>
                                <td>{{$stockbarang->quantity}}</td>
                                <td>{{$stockbarang->created_at->format('d M Y')}}</td>
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
                    <div class="pt-1">
                        <a href="{{route('stock.index')}}" class="btn btn-primary">Kembali</a>
                        <button type="button" class="btn btn-danger" onclick="window.print()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/></svg>
                            Cetak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection