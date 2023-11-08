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
        $jurusan = DB::table('jurusan')->get();
        return view('mahasiswa.create',['jurusan'=>$jurusan]); 
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

 public function store(Request $request)
    {
        DB::table('_mhs')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);
        return redirect(url('/mahasiswa'));

    }

    public function update(Request $request,$id)
    {
        DB::table('_mhs')
        ->where('id',$id)
        ->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);
        return redirect(url('/mahasiswa'));

}

public function destroy($id)
{
    DB::table('_mhs')
    ->where('id',$id)
    ->delete();
      
    
    return redirect(url('/mahasiswa'));

}
    public function show($id)
    {
        $mhs = DB::table('_mhs')
        ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        ->where('_mhs.id', $id)
        ->first();

       

        return view('mahasiswa.edit', ['data' => $mhs,]);
    }
}