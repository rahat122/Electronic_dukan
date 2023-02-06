@extends('backend.master')
@section('contents')
<form action="{{route('product.submit')}}"method="POST"> 

@csrf

<div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" required>
        </div>

        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="product_price" class="form-control" placeholder="Enter Product Price" required>
        </div>

        <div class="form-group">
            <label for="">Product Quantity</label>
            <input type="text" name="product_quantity" class="form-control" placeholder="Enter Quantity" required>
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection