@extends('layout.master')

@section('title', 'Tambah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Mahasiswa</h4>
            </div>
        </div>
        <form action="{{ url('/mahasiswa') }}" method="POST">
            <div class="card-body">
            @csrf
            <div>
                <label class="from-label @error('nim') text-danger @enderror">NIM</label>
                <input class="from-control @error('nim') is-invalid @enderror" type="text" name="nim">
                @error('nim')
                    <div class="invalid-feedback mb-2">{{ $message }}</div>
            @enderror
        </div>
        <div>
                <label class="from-label @error('nama') text-danger @enderror">Nama</label>
                <input class="from-control @error('nama')is-invalid @enderror"type="text"name="nama">
                @error('nama')
                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                @enderror
        </div>
        <div>
                <label class="from-label @error('jurusan') text-danger @enderror">Jurusan</label>
                <select class="from-select @error('jurusan') is-invalid @enderror" name="jurusan">
                    @foreach ($jurusan as $j)
                        <option  value="{{ $j->id }}">{{ $j->nama }} </option>
                @endforeach
            <select>
                @error('jurusan')
                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                @enderror
                  
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
