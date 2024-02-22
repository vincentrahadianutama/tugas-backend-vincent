@extends('layouts.app')

@section('judul')

Halaman Detail Film
@endsection

@section('content')
<h1>{{ $film->nama }}</h1>
<h2>{{ $film->genre }}</h2>
<p>{{ $film->deskripsi }}</p>

<a href="/film" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
