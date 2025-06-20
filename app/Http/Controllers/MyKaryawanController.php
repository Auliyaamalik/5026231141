<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    //
    public function index6()
    {
        // mengambil data dari table keranjang
        //$keranjang = DB::table('keranjang')->get(); //array all record
        $mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data keranjang ke view index
        return view('index6',['mykaryawan' => $mykaryawan]);

    }

    // method untuk menampilkan view form tambah keranjang
    public function tambah6()
    {

        // memanggil view tambah
        return view('tambah6');
    }

    // method untuk insert data ke table keranjang
    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('mykaryawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/mykaryawan');
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

    // method untuk edit data keranjang
    public function edit6($id) // ada primary key
    {
        // mengambil data keranjang berdasarkan id yang dipilih
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
        // passing data keranjang yang didapat ke view edit.blade.php
        return view('edit6',['mykaryawan' => $mykaryawan]);

    }

    // update data keranjang
    public function update(Request $request)
    {
        // update data keranjang
        DB::table('mykaryawan')->where('kodepegawai',$request->id)->update([
            // 'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/mykaryawan');
    }

    // method untuk hapus data keranjang
    public function hapus($id)
    {
        // menghapus data keranjang berdasarkan id yang dipilih
        DB::table('mykaryawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/mykaryawan');
    }

    // method untuk mencari keranjang
    public function cari(Request $request)
	{
	    // menangkap data pencarian
	    $cari = $request->cari;

    // 	// mengambil data dari table keranjang sesuai pencarian data
        $mykaryawan = DB::table('mykaryawan')
	    ->where('namalengkap','like',"%".$cari."%")
	    ->get();

    // 		// mengirim data keranjang ke view index
	    return view('index6',['mykaryawan' => $mykaryawan]);
	}

    public function view($id){
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();
        if (!$mykaryawan) {
            return redirect('/mykaryawan')->with('error', 'Data karyawan tidak ditemukan.');
            //abort(404); // halaman 404 Not Found
            // Atau: return redirect('/mahasiswa')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        // Mengirim data mahasiswa yang didapat ke view detail (misal: 'view_mahasiswa')
        return view('view', ['mykaryawan' => $mykaryawan]);
    }
}
