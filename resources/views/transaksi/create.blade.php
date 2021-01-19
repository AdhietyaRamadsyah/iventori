@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                         <form auction="" method="post">
                             <div class="form-group">
                                  <label for="kode_barang"> Kode Transaksi</label>
                                  <input type="text" name="kode_transaksi" id="kode_barang" class="form-control">
                             </div>
                             <div class="form-group">
                                  <label for="nama_barang"> Nama Barang</label>
                                  <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                             </div>
                             <div class="form-group">
                                  <label for="nama_barang">Nama Suplier</label>
                                  <input type="text" name="nama_suplier" class="form-control" id="">
                             </div>
                             <div class="form-group">
                                  <label for="quantity"> Quantity</label>
                                  <input type="number" name="quantity" id="quantity" class="form-control">
                             </div>
                             <div>
                                 <button class="btn btn-outline-info btn-block">Simpan</button>
                             </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div

@endsection     