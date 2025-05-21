<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 19;
        $alamat = "Surabaya";
        $pelajaran = ["Dasar Pemrograman","Algoritma Struktur Data","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
