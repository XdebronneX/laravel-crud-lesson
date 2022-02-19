@extends('layouts.base')
@section('body')
  <div class="container">
       <a href="{{route('customer.create')}}" class="btn btn-primary a-btn-slide-text">
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
        <th>Customer ID</th>
        <th>Title</th>
        <th>lname</th>
        <th>fname</th>
        <th>address</th>
        <th>phone</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
<tbody>
      @foreach($customers as $customer)
      <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->title}}</td>
        <td><a href="{{route('customer.show',$customer->id)}}">{{$customer->lname}}</a></td>
        <td>{{$customer->fname}}</td>
        <td>{{$customer->addressline}}</td>
        <td>{{$customer->phone}}</td>
<td align="center"><a href="{{ route('customer.edit',$customer->id) }}"><i class="fa-regular fa-pen-to-square" aria-hidden="true" style="font-size:24px" ></a></i></td>
        <td align="center"><a href="{{ route('customer.destroy',$customer->id) }}"  ><i class="fa-solid fa-trash-can" style="font-size:24px; color:red" ></a></i></td>
        </tr>
      @endforeach
</table>
<div>{{$customers->links()}}</div>
</div>
@endsection