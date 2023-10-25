<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $data = [
        [
            'ID' => "123456",
            'nama' => "elektro",
            'jurusan' => "sistem komputer",
        ],
        [
            'ID' => "2201020089",
            'nama' => "dip",
            'jurusan' => "sistem komputer",
        ],
        [
            'ID' => "345678",
            'nama' => "network infastruktur",
            'jurusan' => "sistem komputer",
        ],
        [
            'ID' => "456789",
            'nama' => "web progreming",
            'jurusan' => "sistem komputer",
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

    public function show($id)
    {
        return view('MK.edit', ['data' => $this->data[$id], 'id' => $id]);
    }
}
