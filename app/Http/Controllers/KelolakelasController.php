<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelolakelas;


class KelolakelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kelolakelas = Kelolakelas::All();
        return view('kelolakelas');
    }

    public function Kelolakelas()
    {
        $validate = $req->validate([
            'no' => 'required|max:10',
            'jurusan' => 'required|max:10',
            'kelas' => 'required|max:10',
            'tahunpelajaran' => 'required|max:10',
            'walikelas' => 'required|max:255',
        ]);

        $kelas = new Kelas;
        $kelas ->no = $req->$get('no');
        $kelas ->jurusan = $req->$get('jurusan');
        $kelas ->kelas = $req->$get('kelas');
        $kelas ->tahunpelajaran = $req->$get('tahunpelajaran');
        $kelas ->walikelas = $req->$get('walikelas');

        $kelas->save();

        $notification = array(
            'massage' => 'Data kelas berhasil ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.kelas')->with($notification);
    }
}
