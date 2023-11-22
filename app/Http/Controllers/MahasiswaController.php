<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswa;
use App\Models\jurusan;

class MahasiswaController extends Controller
{
  

    public function index()
    {
        // $mhs = DB::table('_mhs')
        // ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        // ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        // ->get();
        $mhs = mahasiswa::with('jurusan')->get();

        return view('mahasiswa.index', ['data' => $mhs]);
    }

    public function create()
    {
        
        $jurusan = jurusan::all();

        return view('mahasiswa.create',['jurusan'=>$jurusan]); 
    }

    public function edit(mahasiswa $mhs)
    {
        // $mhs = DB::table('_mhs')
        // ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        // ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        // ->where('_mhs.id', $id)
        // ->first();


        $jurusan = jurusan::all();
        
        // $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa.edit', ['data' => $mhs, 'id' => $mhs->id,'jurusan'=>$jurusan]);
    }

 public function store(Request $request)
    {
        $mhs=Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);

        return redirect(url('/mahasiswa'));

    }

    public function update(Request $request,mahasiswa $mhs)
    {
    //     DB::table('_mhs')
    //     ->where('id',$id)
    //     ->update([
    //         'nim' => $request->nim,
    //         'nama' => $request->nama,
    //         'jurusan_id' => $request->jurusan,
    //     ]);

    
    
    $mhs->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'jurusan_id' => $request->jurusan,
    ]);

        return redirect(url('/mahasiswa'));

}

public function destroy(mahasiswa $mhs)
{
    // DB::table('_mhs')
    // ->where('id',$id)
    // ->delete();



    $mhs->delete();

    return redirect(url('/mahasiswa'));

}
    public function show(mahsiswa $mhs)
    {
        $mhs = DB::table('_mhs')
        ->select("_mhs.id","nim","_mhs.nama","jurusan_id","jurusan.nama AS jurusan_nama")
        ->join('jurusan','jurusan.id','=','_mhs.jurusan_id')
        ->where('_mhs.id', $id)
        ->first();

       

        return view('mahasiswa.edit', ['data' => $mhs,]);
    }
}