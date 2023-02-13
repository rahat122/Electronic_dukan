@extends('backend.master')
@section('contents')
<form action="{{route('product.submit')}}"method="POST" enctype="multipart/form-data"> 

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
            <label for="">Category Name</label>
             <select name="category_id" class="form-control" placeholder="Enter Product Name">
                @foreach($Categories as $Category)
                <option value="{{$Category->id}}">{{$Category->category_name}}</option>
                @endforeach
             </select>
        </div>

        <div class="form-group">
            <label for="">Product Quantity</label>
            <input type="text" name="product_quantity" class="form-control" placeholder="Enter Quantity" required>
        </div>

        <div class="form-group">
            <label for="">Product Image</label>
            <input type="file" name="product_image" class="form-control" placeholder="Image" required>
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection