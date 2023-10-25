@extends('layout.master')

@section('title', 'MK')

@section('breadcrumb')
    <li class="breadcrumb-item active">MK</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tabel Data MK</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/mahasiswa/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID matakuliah</th>
                        <th scope="col">nama matakuliah</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d['ID matakuliah\'] }}</td>
                            <td>{{ $d['nama'] }}</td>
                            <td>{{ $d['jurusan'] }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/mahasiswa/' . $loop->index . '/edit') }}">Ubah</a>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
