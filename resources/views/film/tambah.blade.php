@extends('layouts.app')

@section('judul')

Halaman Tambah Film
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Tambah Film</h2>
            <form action="/film" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Film</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label>Genre</label>
                    <input type="text" name="genre" class="form-control">
                </div>

                @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label>Deskripsi Film</label>
                    <textarea name="deskripsi" name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                </div>

                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
