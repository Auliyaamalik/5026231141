<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index4()
    {
        // mengambil data dari table karyawan
        //$karyawan = DB::table('karyawan')->get(); //array all record
        //$karyawan = DB::table('karyawan')->paginate(10); //10 record
        $karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
        return view('index4',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah4()
    {

        // memanggil view tambah
        return view('tambah4');
    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    /* public function proses(Request $request)
    {
    $this->validate($request,[
        'nama' => 'required|min:5|max:20',
        'pekerjaan' => 'required',
        'usia' => 'required|numeric'
    ]);

    return view('proses',['data' => $request]);
    } */

    // method untuk edit data karyawan
    public function edit($id) // ada primary key
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('edit',['karyawan' => $karyawan]);

    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('karyawan')->where('kodepegawai',$request->id)->update([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk mencari karyawan
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->get();

    		// mengirim data karyawan ke view index
		return view('index4',['karyawan' => $karyawan]);

	}
}
