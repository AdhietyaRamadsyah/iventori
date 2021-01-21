@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
        </div>
    </div>
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2">
                <div class="mr-auto">

                    <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Transaksi Masuk</a>
                    <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger">Tambah Transaksi Keluar</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Nama Supplier</th>
                        <th>Kode Barang</th>
                        <th>Status</th>
                        <th>Tgl Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ARX-234-4563-53</td>
                        <td>PT. AEROX</td>
                        <td>TOPI</td>
                        <td>In</td>
                        <td>06-04-2011</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection