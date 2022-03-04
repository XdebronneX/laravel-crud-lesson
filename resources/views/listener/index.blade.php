@extends('layouts.base')
@section('body')
<div class="container">
<br />
    @if ( Session::has('success'))
      <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
      </div><br />
     @endif
<table class="table table-striped">
      <tr>{{ link_to_route('listener.create', 'Add new listener:')}}</tr>
    <thead>
      <tr>
        <th>listener ID</th>
        <th>listener Name</th>
        <th>Albums</th>
        <th colspan="2">Action</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
<tbody>
      @foreach($listeners as $listener)
        <td>{{$listener->id}}</td>
        <td>{{$listener->listener_name}}</td>
        <td>
         <li>{{$listener->album_name}} </li>
        </td>
<td><a href="{{action('ListenerController@edit', $listener->id)}}" class="btn btn-warning">Edit</a></td>
       <td>
          <form action=" {{action('ListenerController@destroy', $listener->id)}}" method="post">
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
