@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center">suplier</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{asset('images/taylor.jpg')}}" class="rounded-circle"  width="80px" height="80" alt="">
                    <p class="font-weight-bold text-center pt-2">Tailor Otwel</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">tayloretwel@gmail.com
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
                   <a href="{{route('request.accept')}}" class="btn btn-success btn-sm">Accept</a>
                   <a href="{{route('request.reject')}}" class="btn btn-danger btn-sm">Reject</a>
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
    </div>
</div>
@endsection