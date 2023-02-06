@extends('backend.master')
@section('contents')
<a class="btn btn-primary" href="{{route('customer.create')}}">Create</a>
 @if(session()->has('message'))
 <p class="alert alert-success alert-block">
  {{session()->get('message')}}
 </p>
 @endif


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email_address</th>
      <th scope="col">contact_number</th>
      <th scope="col">customer_address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Customers as $Customer)
    <tr>
      <th scope="row">{{$Customer->id}}</th>
      <td>{{$Customer->first_name}}</td>
      <td>{{$Customer->last_name}}</td>
      <td>{{$Customer->email_address}}</td>
      <td>{{$Customer->contact_number}}</td>
      <td>{{$Customer->customer_address}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('customer.edit',$Customer->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('customer.delete',$Customer->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$Customers->links()}}
@endsection