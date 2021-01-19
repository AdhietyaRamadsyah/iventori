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
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Barang Masuk</a>
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
                    <td>KRL-234-4563-53</td>
                    <td>PT AEROX</td>
                    <td>TOPI</td>
                    <td>10</td>
                    <td>06-04-2011</td>
                    
                </tr>
                <tr>
                    <td>YMH-234-346-89</td>
                    <td>PT YAMAHA</td>
                    <td>JAKET</td>
                    <td>500</td>
                    <td>23-06-2012</td>
                   
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
