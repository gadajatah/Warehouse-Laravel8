@extends('layouts.app')
@section('title-1', 'WH | Barang')
@section('title-2', 'Semua Data Barang')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title-2')</div>

                <div class="card-body">
                    <div class="table">
                    <div class="tambah">
                        <a href="{{ route('item.create') }}" class="btn btn-primary text-white">Tambah Barang</a>
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
                        <th scope="col">Stock</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($items as $index => $brg)
                        <tr>
                            <th scope="row">{{ ++$index }}</th>
                            <td>{{ $brg->nama }}</td>
                            <td>{{ $brg->stok }}</td>
                            <td>{{ $brg->harga }}</td>
                            <td>
                                <ul class="list-inline">
                                  <li class="list-inline-item">
                                    <a href="#"class="btn btn-info btn-sm text-white">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm text-white">Delete</a>
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
