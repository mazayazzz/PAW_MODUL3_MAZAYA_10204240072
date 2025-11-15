<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = (object)[
        'nama'     => 'Mazaya Nur Angelina Kanaiday Nadinney',
        'nim'      => '102042400072',
        'email'    => 'mazaya@example.com',
        'jurusan'  => 'Sistem Informasi',
        'fakultas' => 'Rekayasa Industri',
        'foto'     => 'mazaya.jpg'  // pastikan file ada di /public/images
        ];
        // - Kirim object tersebut ke view 'profil'
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
