<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessorController extends Controller
{
    //
    public function index2()
    {
        // mengambil data dari table processor
        //$processor = DB::table('processor')->get(); //array all record
        $processor = DB::table('processor')->paginate(10);

    	// mengirim data processor ke view index2
        return view('index2',['processor' => $processor]);

    }

    // method untuk menampilkan view form tambah processor
    public function tambah2()
    {

        // memanggil view tambah
        return view('tambah2');
    }

    // method untuk insert data ke table processor
    public function store(Request $request)
    {
        // Konversi nilai 'tersedia' dari checkbox
        // $request->has('tersedia') akan mengembalikan TRUE jika checkbox dicentang, FALSE jika tidak.
        $isTersedia = $request->has('tersedia');

        // insert data ke table processor
        DB::table('processor')->insert([
            'merk_processor' => $request->merk,
            'harga_processor' => $request->harga,
            'tersedia' => $isTersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman processor
        return redirect('/processor');
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

    // method untuk edit data processor
    public function edit2($id) // ada primary key
    {
        // mengambil data processor berdasarkan id yang dipilih
        $processor = DB::table('processor')->where('processor_ID',$id)->get();
        // passing data processor yang didapat ke view edit.blade.php
        return view('edit2',['processor' => $processor]);

    }

    // update data processor
    public function update(Request $request)
    {
        // Konversi nilai 'tersedia' dari checkbox
        // $request->has('tersedia') akan mengembalikan TRUE jika checkbox dicentang, FALSE jika tidak.
        $isTersedia = $request->has('tersedia');

        // update data processor
        DB::table('processor')->where('processor_ID',$request->id)->update([
            'merk_processor' => $request->merk,
            'harga_processor' => $request->harga,
            'tersedia' => $isTersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman processor
        return redirect('/processor');
    }

    // method untuk hapus data processor
    public function hapus($id)
    {
        // menghapus data processor berdasarkan id yang dipilih
        DB::table('processor')->where('processor_ID',$id)->delete();

        // alihkan halaman ke halaman processor
        return redirect('/processor');
    }

    // method untuk mencari processor
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table processor sesuai pencarian data
		$processor = DB::table('processor')
		->where('merk_processor','like',"%".$cari."%")
		->paginate();

    		// mengirim data processor ke view index2
		return view('index2',['processor' => $processor]);

	}
}
