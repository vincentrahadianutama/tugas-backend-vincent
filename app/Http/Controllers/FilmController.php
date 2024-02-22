<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\film;
use App\Models\genre;



class FilmController extends Controller
{
    public function create(){
        return view('film.tambah');
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'genre'=>'required',
            'deskripsi' => 'required',
        ]);

        DB::table('film')->insert([
            'nama'=>$request['nama'],
            'genre'=>$request['genre'],
            'deskripsi'=>$request['deskripsi']

        ]);

        return redirect('/film');

    }
    public function index(){
        $film = DB::table('film')->get();
        //dd($film);
        return view ('film.tampil', ['film'=>$film]);
    }
    public function show ($id) {
        $film = DB::table('film')->where('id', $id)->first();
        return view('film.detail', ['film' => $film]);
    }
    public function edit ($id){
        $film = DB::table('film')->where('id', $id)->first();

        return view ('film.edit', [ 'film' => $film]);
    }
    public function  update (Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'genre'=>'required',
            'deskripsi' => 'required',
        ]);
        DB::table('film')
              ->where('id', $id)
              ->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi]
            );
            return redirect('/film');
    }
    public function destroy($id){
        DB::table('film')->where('id', $id)->delete();
        return redirect ('/film');
    }
}
