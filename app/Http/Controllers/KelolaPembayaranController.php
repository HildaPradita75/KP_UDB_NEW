<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelolaPembayaran;

class KelolaPembayaranController extends Controller
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
        $kelolaPembayaran = KelolaPembayaran::All();
        return view('kelolaPembayaran');
    }
}
