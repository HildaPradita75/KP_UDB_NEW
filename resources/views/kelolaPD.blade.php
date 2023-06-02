@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1 class="m-0 text-dark" style="text-align: center;">SELAMAT DATANG DI APLIKASI</h1>
    <h1 class="m-0 text-dark" style="text-align: center;">PEMBAYARAN UANG DANA BULANAN </h1>
    <h1 class="m-0 text-dark" style="text-align: center;"> DI SMK PASUNDAN 1 CIANJUR </h1>
    @stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3">
                <p class="mb-0"></p>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                    </button>

                    <button class="btn btn-danger">Hapus</button>
                </div>
            </div>
                    
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tingkat</th>
                        <th>Program keahlian</th>
                        <th>kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>X</td>
                        <td>AKUL</td>
                        <td>1</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Lihat
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>    
    </div>
</div>    


<!-- Modal -->
<div class="modal fade" id="exampleM odal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-between mb-1">
            <p>Kelas</p>
            <input type="text" placeholder="Kelas">        
        </div>
        <div class="d-flex justify-content-between mb-1">
            <p>Jumlah Peserta Didik</p>
            <input type="num" placeholder="Jumlah Peserta Didik">        
        </div>
        <div class="d-flex justify-content-between mb-1">
            <p>Jurusan</p>
            <input type="text" placeholder="Jurusan">        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade " id="LihatData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3">
                <p class="mb-0"></p>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                    </button>
                </div>
            </div>
                    
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Jumlah Pesrta Didik</th>
                        <th>Program Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>X AKUL 1</td>
                        <td>30</td>
                        <td>AKUL</td>
                        <td>
                            <button class="btn btn-warning">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
      </div>
    </div>
  </div>
</div>
@stop