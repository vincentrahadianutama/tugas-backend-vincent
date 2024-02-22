@extends('layouts.app')

@section('judul')

Halaman List Film
@endsection

@section('content')
<a href="/film/create" class="btn btn-primary btn-sm mb-3">Tambah Film</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Judul</th>
        <th scope="col">Genre</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($film as $key => $value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value->nama}}</td>
            <td>{{ $value->genre }}</td>

            <td>

                <form action="/film/{{ $value->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/film/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/film/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @empty
        <tr style="text-align: center;">
            <td>Tidak ada film</td>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection
