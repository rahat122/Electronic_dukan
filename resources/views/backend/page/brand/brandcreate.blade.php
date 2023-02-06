@extends('backend.master')
@section('contents')
<form action="{{route('brand.submit')}}" method="POST" enctype="multipart/form-data"> 
    @csrf
    <div class="form-group">
            <label for="">Brand_Name</label>
            <input type="text" name="Brand_Name" class="form-control" placeholder="Enter Brand Name">
        </div>

        <div class="form-group">
            <label for="">Brand_Type</label>
            <input type="text" name="Brand_Type" class="form-control" placeholder="Enter Brand Type">
        </div>

        <div class="form-group">
            <label for="">Brand_Status</label>
            <input type="text" name="Brand_Status" class="form-control" placeholder="Enter Brand Status">
        </div>
        
        <div class="form-group">
            <label for="">Brand_Image</label>
            <input type="file" name="Brand_Image" class="form-control" placeholder="Enter Brand Image">
        </div>
        
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection 