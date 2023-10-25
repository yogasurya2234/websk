<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $data = [
        [
            'nim' => "123456",
            'nama' => "I Putu satu",
            'jurusan' => "TI",
        ],
        [
            'nim' => "234567",
            'nama' => "I Wayan dua",
            'jurusan' => "TI",
        ],
        [
            'nim' => "345678",
            'nama' => "I Ketut tiga",
            'jurusan' => "SK",
        ],
        [
            'nim' => "456789",
            'nama' => "I Kadek empat",
            'jurusan' => "DGM",
        ],
    ];

    public function index()
    {
        return view('mahasiswa.index', ['data' => $this->data]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function edit($id)
    {
        return view('mahasiswa.edit', ['data' => $this->data[$id], 'id' => $id]);
    }

    public function show($id)
    {
    }
}
