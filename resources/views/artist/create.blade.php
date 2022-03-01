@extends('layouts.base')
@section('body')
<div class="container">
  <h2>Create new artist</h2>
  
  <form method="post" action="{{route('artist.store')}}" >
  @csrf  
  
  <div class="form-group">
    <label for="artist_name" class="control-label">Artist Name</label>
    <input type="text" class="form-control" id="artist_name" name="artist_name" >
  </div> 
<button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form> 
@endsection