@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info">Tambah Barang baru</a>
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
                              <th>Nama Supplier</th>
                              <th>Nama Barang</th>
                              <th>Quantity</th>
                              <th>Options</th>
                        </tr>
                         </thead>
                         <tbody>
                          <tr>
                              <td>KRL-234-4563-53</td>
                              <td>PT AEROX</td>
                              <td>Topi</td>
                              <td>10</td>
                              <td>
                                   <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                   <a href="{{route('master-barang.show')}}" class="btn btn-outline-primary btn-sm">Detail</a>
                                   <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-outline-danger btn-sm">Delete</a>
                              </td>
                          </tr>
                          <tr>
                              <td>YMH-234-346-89</td>
                              <td>PT YAMAHA</td>
                              <td>Jaket</td>
                              <td>500</td>

                              <td>
                                   <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                   <a href="{{route('master-barang.show')}}" class="btn btn-outline-primary btn-sm">Detail</a>
                                   <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-outline-danger btn-sm">Delete</a>
                             </form>
                         </td>
                     </tr>
                </tbody>
          </table>    
       </div>
    </div>
</div>

@endsection
