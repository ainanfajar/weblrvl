<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tittle = "Data Mahasiswa";
        $data['mahasiswa'] = array(
            'nim' => '1915101032',
            'nama' => 'Ainan Fajar Fatcha'
        );
        return view('admin.beranda', compact('tittle', 'data'));
    }

    public function dashboard()
    {
        $tittle = "Dashboard";
        return view('admin.dashboard', compact('tittle'));
    }
}
