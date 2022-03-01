@extends('layouts.base')
@section('body')
 <div class="container">
      <h2>Edit Album</h2><br/>
      {{-- dd($artists) --}}
      {{ Form::model($artist,['route' => ['artist.update',$artist->id],'method'=>'PUT']) }}
<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Artist Name:</label>
           {!! Form::text('artist_name',$artist->artist_name,array('class' => 'form-control')) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
     {!! Form::close() !!}
    </div>
@endsection