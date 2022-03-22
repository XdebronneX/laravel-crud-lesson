@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>user profile</h1>
            <p>{{ Auth::user()->name}}</p>
        </div>
     </div>
@endsection