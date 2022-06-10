{{-- @extends('layouts.base') --}}
@extends('layouts.app')
@section('content')

<div class="container">
    <br/>
    @if ( Session::has('success'))
      <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
      </div><br/>
     @endif
    <table class="table table-striped">
      <tr>{{link_to_route('artist.create', 'Add new artist:')}}</tr>
<thead>
      <tr>
        <th>Artist ID</th>
        <th>Artist Name</th>
        <th>Artist Image</th>
        <th>Album Name</th>
        {{-- <th>Show</th>
        <th>Edit</th>
        <th>Delete</th> --}}
        <th colspan="1">Action</th>
        <th colspan="1">Action</th>
        <th colspan="1">Action</th>
      </tr>
    </thead>
 <tbody>
   @foreach($artists as $artist)
      
      <tr>
        <td>{{$artist->id}}</td>
        <td>{{$artist->artist_name}}</td>
        <td><img src="{{asset('storage/'.$artist->img_path) }}" width="80" height="80"></td> 
        <td>
        @foreach($artist->albums as $album)
          <li>{{$album->album_name}}</li>  
        @endforeach
        </td>
     {{-- dd($artists) --}}
      {{-- @foreach($artists as $artist)
      <tr>
        <td>{{$artist->id}}</td>
        <td>{{$artist->artist_name}}</td>
        <td>{{$artist->album_name}}
        <td><img src="{{asset('storage/'.$artist->img_path) }}" width="80" height="80" /></td> --}}
        {{-- @foreach($artist->albums as $art)
         <ul>{{ $art->id . $art->name}}</ul> 
        @endforeach --}}
        </td>
<td><a href = "{{ route('artist.show', $artist->id ) }}"  class="btn btn-warning">show</a></td>
        {{-- <td> --}}
        <td><a href="{{ action('ArtistController@edit', $artist->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
<form action="{{ action('ArtistController@destroy', $artist->id)}}" method="post">
           {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
  </div>
@endsection





