@extends('layouts\master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign Up</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form class="" action="{{ route('user.signup') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                    <input type="submit" value="Sign Up" class="btn btn-primary">
             </form>
        </div>
    </div>
@endsection