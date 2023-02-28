@extends('backend.master')
@section('contents')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>
  @foreach($Users as $User)
    <tr>
      <th scope="row">{{$User->id}}</th>
      <td>{{$User->name}}</td>
      <td>{{$User->email}}</td>
      <td>{{$User->role}}</td>
      <td>{{$User->password}}</td>
    
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection