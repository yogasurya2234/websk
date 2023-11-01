<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $data = [
        [
            'ID' => "2201020078",
            'nama' => " Microprocessor",
            'jurusan' => "Sistem Komputer",
        ],
        [
            'ID' => "2201020089",
            'nama' => "Network and Infrastructure",
            'jurusan' => "Sistem Komputer",
        ],
        [
            'ID' => "2301020045",
            'nama' => "Cloud Technology ",
            'jurusan' => "Sistem Komputer",
        ],
        [
            'ID' => "2122010045",
            'nama' => "web progreming",
            'jurusan' => "Sistem Komputer",
        ],
    ];
    public function index()
    {
        return view('MK.index', ['data' => $this->data]);
    }

    public function create()
    {
        return view('MK.create');
    }

  
    public function edit($id)
    {
        return view('MK.edit', ['data' => $this->data[$id], 'id' => $id]);
    }

    public function show($id)
    {

    }
}
