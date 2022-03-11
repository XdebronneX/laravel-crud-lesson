{{-- {{ dd($albums) }} --}}
{{-- @extends('layouts.base') --}}
@extends('layouts.app')
@section('content')
<div class="container">
       <a href="{{route('album.create')}}" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>ADD</strong></span>            
    </a>
</div>

@if ($message = Session::get('success'))
 <div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button> 
         <strong>{{ $message }}</strong>
 </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover">
    <thead>
<tr>
        <th>Album ID</th>
        <th>title</th>
        <th>Artist</th>
        <th>Album Cover</th>
        <th>Action</th>
        {{-- <th>Genre</th>
        <th>Year</th> --}}
        </tr>
    </thead>
    <tbody>
      @foreach($albums as $album)
      <tr>
          <td>{{$album->id}}</td>
          <td>{{$album->album_name}}</td>
          <td>{{$album->artist_name}}</td>
          <td><img src="{{ asset($album->img_path) }}"width="80" height="80" /></td>
          {{-- <td>{{$album->genre}}</td>
          <td>{{$album->year}}</td> --}}
          <td align="center"><a href="{{route('album.edit',$album->id)}}">
            <i class="fa-regular fa-pen-to-square" aria-hidden="true" style="font-size:24px" ></i></a>
          </td>
          <td align="center">{!! Form::open(array('route' => array('album.destroy', $album->id),'method'=>'DELETE')) !!}
        <button ><i class="fa-solid fa-trash-can" style="font-size:24px; color:red" ></i></button>
        {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection