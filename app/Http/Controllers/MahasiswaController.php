<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
  

    public function index()
    {
        $mhs = DB::table('_mhs')
        ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        ->get();

        return view('mahasiswa.index', ['data' => $mhs]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function edit($id)
    {
        $mhs = DB::table('_mhs')
        ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        ->where('_mhs.id', $id)
        ->first();

        $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa.edit', ['data' => $mhs, 'id' => $id,'jurusan'=>$jurusan]);
    }

    public function show($id)
    {
    }
}
