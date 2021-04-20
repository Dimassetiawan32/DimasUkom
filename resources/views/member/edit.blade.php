@extends('layouts.app')

@section('content')
<div class="d-flex bd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top:-28px;">
        <section id="content">
            <h4 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center" style="margin-left:80px;">Admin</h4>
            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{asset('images/download.jpg')}}" class="rounded-circle" height="80" width="80px" alt="">
                    <p class="font-weight-bold text-center pt-2">SteveJobs</p>
                </div>
                <p class="text-muted text-center" style="margin-top:-15px;">stevejobs@gmail.com
                    <a href="{{route('member.index')}}" class="btn btn-primary btn-sm btn-block">Invite Member</a>
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
               <div class="pt-2">
                   <div class="card border-0 shadow">
                       <div class="card-body">
                           <form action="" method="POST">
                               @csrf
                               @if(session('success'))
                                   <div class="alert alert-success">
                                       {{ session('success')}}
                                   </div>
                               @endif
                               <div class="mb-3 pt-2">
                                   <h5 class="font-weight-bold">Form Edit Member</h5>
                               </div>
                               <div class="row">
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label for="">User Name</label>
                                           <input type="text" name="nama" class="form-control" id="">
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label for="">Email</label>
                                           <input type="text" name="nama" class="form-control" id="">
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label for="">Password</label>
                                           <input type="text" name="nama" class="form-control" id="">
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label for="">Roles</label>
                                           <input type="text" name="nama" class="form-control" id="">
                                       </div>
                                   </div>
                               </div>
                               <button type="submit" class="btn btn-primary btn-sm">Save</button>
                               <a href="{{route('member.index')}}" class="btn btn-secondary btn-sm">cancel</a>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection()