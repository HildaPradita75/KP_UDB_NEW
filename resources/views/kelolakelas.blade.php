@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1 class="m-0 text-dark" style="text-align: center;">SELAMAT DATANG DI MENU</h1>
    <h1 class="m-0 text-dark" style="text-align: center;">KELOLA KELAS</h1>
    @stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="navbar-menu-wrappr d-flex align-item-center justify-content-between mb-3">
                <p class="mb-0"></p>
                <!-- /<div> -->
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                    </button>

                    <button class="btn btn-danger">Hapus</button>
                </div> -->
            </div>
                    
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Tahun Pelajaran</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>AKUL</td>
                        <td>X</td>
                        <td>2020</td>
                        <td>Pratayoga Iskandar</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Tambah
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Hapus
                            </button>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>2</td>
                        <td>TKJ</td>
                        <td>XI</td>
                        <td>2022</td>
                        <td>Ayu Siti Fatimah</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Tambah
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#LihatData">
                            Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>    
    </div>
</div>    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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