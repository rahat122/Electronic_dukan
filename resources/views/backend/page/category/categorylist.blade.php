@extends('backend.master')
@section('contents')
<a class="btn btn-primary" href="{{route('category.create')}}">Create</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category_name</th>
      <th scope="col">category_description</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Categories as $Category)
    <tr>
      <th scope="row">{{$Category->id}}</th>
      <td>{{$Category->category_name}}</td>
      <td>{{$Category->category_description}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('category.edit',$Category->id)}}">Edit/Update</a>
        <a class="btn btn-danger" href="{{route('category.delete',$Category->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$Categories->links()}}
@endsection