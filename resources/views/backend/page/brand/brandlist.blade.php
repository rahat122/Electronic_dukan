@extends('backend.master')
@section('contents')
<a class="btn btn-primary" href="{{route('brand.create')}}">Create</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Brand_Name</th>
      <th scope="col">Brand_Type</th>
      <th scope="col">Brand_Status</th>
      <th scope="col">Brand_Image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
     
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
      </td>
    </tr>
   
  </tbody>
</table>
@endsection