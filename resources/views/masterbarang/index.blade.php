@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info">Tambah Data Barang Baru</a>
                        </div>
                        <div>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-info"> Cari data </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>

                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{$barang->kode_barang}}</td>

                                <td>{{$barang->nama_barang}}</td>
                                <td>{{$barang->quantity}}</td>
                                <td>
                                    <form action="{{route('master-barang.delete', $barang->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('master-barang.edit',$barang->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <a href="{{route('master-barang.show',$barang->id)}}" class="btn btn-outline-primary btn-sm">Detail</a>
                                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection