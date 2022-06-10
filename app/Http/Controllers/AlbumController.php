<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Album;
use \App\Models\Artist;
use View;
use Redirect;

class AlbumController extends Controller
{
    public function index() {
      

    //$albums = Album::orderBy('id','DESC')->paginate(5);

    //$albums = Album::all(); 
        //dd($albums); // die and dump
        //dd(compact('albums'));

        // $albums = DB::table('artists')
        // ->join('albums','artists.id','albums.artist_id')
        // ->get();
        //dd($albums); 
        // return View::make('album.index',compact('albums'));

//===========================New Method=================

        // yung nasa with ay method hindi tablename
        // yung artist method yan na nasa model ng album
        //dynamic property
        $albums = Album::with('artist','listeners')->get();
        //$albums = Album::with('artist')->orderBy('album_name', 'DESC')->get();
        // $albums = Album::all();
        //dump($albums);

        //hiram lang
    //     foreach($albums as $album){
    //     // dump($album->album_name);
    //     // dump($album->artist_id);
    //     dump($album);
    //     dump($album->artist->artist_name);
    // }

//==================================
        //$albums = Album::all();
        // foreach ($albums as $album) {
        //  //dump($album->album_name);
        //  dump($album->artist->artist_name); // this is lazy loaded
        // }
     return View::make('album.index',compact('albums'));
    }

    public function create() {
        //return view::make('album.create');
     $artists = Artist::pluck('artist_name','id');
     //dd($artists);
     return View::make('album.create',compact('artists'));
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
        // $input = $request->all(); //returning value is array
        // Album::create($input);
        //return Redirect::to('/album')->with('success','New Album Added');


//==========New Method============
        $artist = Artist::find($request->artist_id);
        // dd($artist);
        $album = new Album();
        $album->album_name = $request->album_name;
        // $album->artist_id = $request->artist_id;
        $album->artist()->associate($artist);
        // $album->save();

        $input = $request->all();
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            // 'image' => ['mimes:jpeg,png,jpg,gif,svg|
            //  file|max:512' ]
        ]);

        if($file = $request->hasFile('image')) {
            $file = $request->file('image') ;
            // $fileName = uniqid().'_'.$file->getClientOriginalName();
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images' ;
            // dd($fileName);
            //$input['img_path'] = 'images/'.$fileName;
            
            $input['img_path'] = 'images/'.$fileName;
            // $album = Album::create($input);
            $file->move($destinationPath,$fileName);
        }
          $album = Album::create($input);
        return Redirect::to('/album')->with('success','New Album Added');
    }

    public function edit($id) {
        // $album = Album::find($id);
        // //dd($album);
        // return View::make('album.edit',compact('album'));

        // $album = Album::find($id);
        // $artists = Artist::pluck('artist_name','id');
        // return View::make('album.edit',compact('album', 'artists'));

//================New Method

        $album = Album::with('artist')->where('id',$id)->first();
        // $album = Album::with('artist')->find($id)->first();
        // $albums = Album::with('artist')->where('id',$id)->take(1)->get();
        // dd($album,$albums);
        //$artist = Artist::where('id',$album->artist_id)->pluck('name','id');
        // dd($album);
        $artists = Artist::pluck('artist_name','id');
         return View::make('album.edit',compact('album', 'artists'));

    }

    public function update(Request $request, $id){
     //dd($request);
     //$album = Album::find($request->id);
     // $album = Album::find($id);
     // //dd($album,$request->all());
     // //dd($album,$request);
     // //dd($album);
     // $album->update($request->all());
     // return Redirect::to('/album')->with('success','Album updated!');



//===================New Method========

         // $album = Album::find($id);
       //  // dd($album);
       //  $album->update($request->all());
       //  return Redirect::route('album.index')->with('success','Album updated!');

        $artist = Artist::find($request->artist_id);
        // dd($artist);
        $album = Album::find($id);
        $album->album_name = $request->album_name;
        $album->artist()->associate($artist);
        $album->save();
     return Redirect::to('/album')->with('success','Album updated!');
    }

    public function destroy($id) {
         //$album = Album::find($id);
         //$album->delete();
         // Album::destroy($id);
         // return Redirect::to('/album')->with('success','Album deleted!');

        $album = Album::find($id);
        $album->listeners()->detach();
        $album->delete();
        
        return Redirect::route('album.index')->with('success','Album deleted!');
    }
}
