@extends('layouts.app')
@section('title-1', 'Dashboard')
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
                              <h2 class="card-title">0</h2>
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
             <div class="table">
               <div class="tambah">
                 <a href="{{ route('worker.create') }}" class="btn btn-primary text-white">Tambah Petugas</a>
               </div>

               {{-- Alert Untuk Success dan Error --}}
               @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                 {{-- Alert Untuk Success dan Error --}}

                <table class="table mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenkel</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($workers as $index => $worker)
                        <tr>
                            <th scope="row"> {{ ++$index }} </th>
                            <td> {{ $worker->nama }} </td>
                            <td> {{ $worker->jenkel }} </td>
                            <td> {{ $worker->username }} </td>
                            <td> {{ $worker->password }} </td>
                            <td>
                                <ul class="list-inline">
                                  <li class="list-inline-item">
                                    <a href="{{ route('worker.edit', $worker->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
                                    <a href="{{ route('worker.destroy', $worker->id) }}" class="btn btn-danger btn-sm text-white">Delete</a>
                                  </li>
                                </ul>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
