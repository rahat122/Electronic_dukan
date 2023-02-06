@extends('backend.master')
@section('contents')
<form action="{{route('category.submit')}}"method="POST"> 

@csrf

<div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required>
        </div>

        <div class="form-group">
            <label for="">Category Price</label>
            <input type="text" name="category_price" class="form-control" placeholder="Enter Category Price" required >
        </div>

        <div class="form-group">
            <label for="">Category Type</label>
            <input type="text" name="category_type" class="form-control" placeholder="Enter Category Type" required>
        </div>

        <div class="form-group">
            <label for="">Category Description</label>
            <input type="text" name="category_description" class="form-control" placeholder="Enter Category Description" required>


        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection