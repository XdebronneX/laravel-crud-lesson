@extends('layouts.base')
@section('body')
<div class="container">
  <h2>Create new album</h2>
  {{-- <form method="post" action="{{url('store')}}" > --}}
  {{-- <form method="post" action="{{url('')}}" > --}}
  <form method="post" action="{{route('album.store')}}" >
  @csrf  
  {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div> 

<div class="form-group">
    <label for="artist" class="control-label">Artist</label>
    <input type="text" class="form-control " id="artist" name="artist">
  </div> 

<div class="form-group"> 
    <label for="genre" class="control-label">Genre</label>
    <input type="text" class="form-control " id="genre" name="genre" >
  </div>

<div class="form-group"> 
    <label for="year" class="control-label">Year</label>
    <input type="text" class="form-control" id="year" name="year">
  </div>

<button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form> 
@endsection