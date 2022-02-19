<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Album;
use View;
use Redirect;

class AlbumController extends Controller
{
    public function index() {
      
        $albums = Album::all();
        //dd($albums); // die and dump
        //dd(compact('albums'));
     return View::make('album.index',compact('albums'));
    }

    public function create() {
        return view::make('album.create');
    }

    public function store(Request $request) {
     //dd($request);
    //option1
     //dd($request->title);

    //====================================
    //option2

     // $title = $request->title;
     // $artist = $request->artist;
     // $genre = $request->genre;
     // $year = $request->year;

     // $album = New Album;
     // $album->title = $title;
     // $album->artist = $artist;
     // $album->genre = $genre;
     // $album->year = $year;
     // $album->save();
     // return Redirect::to('/album');  
    //====================================
    //option3
        //dd($request->all());
        $input = $request->all(); //returning value is array
        Album::create($input);
        return Redirect::to('/album')->with('success','New Album Added');
    }

    public function edit($id) {
        $album = Album::find($id);
        //dd($album);
        return View::make('album.edit',compact('album'));
    }

    public function update(Request $request, $id){
     //dd($request);
     //$album = Album::find($request->id);
     $album = Album::find($id);
     //dd($album,$request->all());
     //dd($album,$request);
     //dd($album);
     $album->update($request->all());
     return Redirect::to('/album')->with('success','Album updated!');
    }

    public function delete($id) {
         //$album = Album::find($id);
         //$album->delete();
         Album::destroy($id);
         return Redirect::to('/album')->with('success','Album deleted!');
    }
}
