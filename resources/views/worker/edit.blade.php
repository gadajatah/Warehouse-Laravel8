@extends('layouts.app')
@section('title-1', 'WH | Edit Petugas')
@section('title-2', 'Edit Petugas')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title-2')</div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-8">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $worker->nama }}">
                                        </div>
                                    </div>
                                </div>
                             <div class="col-md-8">
                                    <div class="mb-3 row">
                                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenkel" name="jenkel" value="{{ $worker->jenkel }}">
                                    </div>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" value="{{ $worker->username }}">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="password" name="password" value="{{ $worker->password }}">
                                </div>
                                </div>
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary text-white">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection