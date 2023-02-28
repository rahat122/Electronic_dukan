@extends('backend.master')
@section('contents')
<form action="{{route('category.update',$Category->id)}}" method="POST"> 
@method('PUT')
@csrf

<div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" value="{{$Category->category_name}}">
        </div>

        <div class="form-group">
            <label for="">Category Description</label>
            <input type="text" name="category_description" class="form-control" placeholder="Enter Category Description" value="{{$Category->category_description}}">


        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    
@endsection