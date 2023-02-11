@extends('backend.master')
@section('contents')
<form action="{{route('product.update',$Product->id)}}"method="POST" enctype="multipart/form-data" > 
@method('PUT')
@csrf

<div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" value="{{$Product->product_name}}">
        </div>

        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="product_price" class="form-control" placeholder="Enter Product Price" value="{{$Product->product_price}}">
        </div>

        <div class="form-group">
            <label for="">Product Quantity</label>
            <input type="text" name="product_quantity" class="form-control" placeholder="Enter Quantity" value="{{$Product->product_quantity}}">
        </div>

        
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="file" name="product_image" class="form-control" placeholder="Image" value="{{$Product->product_image}}">
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection