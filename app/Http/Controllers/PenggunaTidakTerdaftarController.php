<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaTidakTerdaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:pengguna tidak terdaftar']);
    }

    public function index()
    {
        return view('pengguna-tidak-terdaftar.index');
    }

    public function menuTidakTersedia()
    {
        return view('pengguna-tidak-terdaftar.menu-tidak-tersedia');
    }
}

