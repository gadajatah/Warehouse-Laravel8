@extends('layouts.app')
@section('title-1', 'WH | Dashboard')
@section('title-2', 'Welcome to the Warehouse')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title-2')</div>

                <div class="card-body">
                   <div class="row text-center">
                       <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">
                              Data Petugas
                            </div>
                            <div class="card-body">
                              <h2 class="card-title">{{ $pekerja }}</h2>
                            </div>
                            <div class="card-footer text-muted">
                              <a href="#" class="btn btn-info btn-sm text-white">View</a>
                            </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">
                              Data Barang
                            </div>
                            <div class="card-body">
                              <h2 class="card-title">{{ $barang }}</h2>
                            </div>
                            <div class="card-footer text-muted">
                              <a href="#" class="btn btn-info btn-sm text-white">View</a>
                            </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="card text-center">
                            <div class="card-header">
                              Data Barang Keluar
                            </div>
                            <div class="card-body">
                              <h2 class="card-title">0</h2>
                            </div>
                            <div class="card-footer text-muted">
                              <a href="#" class="btn btn-info btn-sm text-white">View</a>
                            </div>
                          </div>
                      </div>
                    </div>
                    <hr>
                   </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection
