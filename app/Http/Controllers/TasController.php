<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tas
        //$tas = DB::table('tas')->get();
        $tas = DB::table('tas')->paginate(5);

        // mengirim data tas ke view index
        return view('tas.index-tas', ['tas' => $tas]);
    }

    public function tambah()
    {
        return view('tas.tambah-tas');
    }

    // method untuk insert data ke table tas
    public function store(Request $request)
    {
        // insert data ke table tas
        DB::table('tas')->insert([
            'merktas' => $request->merk,
            'stocktas' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    // method untuk edit data tas
    public function edit($id)
    {
        // mengambil data tas berdasarkan id yang dipilih
        $tas = DB::table('tas')->where('kodetas', $id)->get();
        // passing data tas yang didapat ke view edit.blade.php
        return view('tas.edit-tas', ['tas' => $tas]);
    }

    // update data tas
    public function update(Request $request)
    {
        // update data tas
        DB::table('tas')->where('kodetas', $request->id)->update([
            'merktas' => $request->merk,
            'stocktas' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    // method untuk hapus data tas
    public function hapus($id)
    {
        // menghapus data tas berdasarkan id yang dipilih
        DB::table('tas')->where('kodetas', $id)->delete();

        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    //method untuk melakukan search
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari tabel tas sesuai pencarian data
        $tas = DB::table('tas')
            ->where('tas.merktas', 'like', "%" . $cari . "%")
            ->paginate(5);

        // mengirim data tas ke view index
        return view('tas.index-tas', ['tas' => $tas]);
    }

    //method untuk melihat detail tas
    public function detail($id)
    {
        // ambil data tas berdasarkan kodenya
        $tas = DB::table('tas')->where('kodetas', $id)->get();
        //mengirim data tas view detail
        return view('tas.detail-tas', ['tas' => $tas]);
    }
}
