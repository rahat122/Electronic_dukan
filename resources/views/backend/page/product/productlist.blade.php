@extends('backend.master')
@section('contents')
<div class="row">
    <div class="col-md-6">
 <a class="btn btn-primary" href="{{route('product.create')}}">Create Product</a>
    </div>
    <div class="col-md-6">
      <form action="{{route('product.list')}}" method="get">
      <div class="row">
       <div class="col-md-8"> 
      <input class="form-control" type="text" placeholder="Search product" name="search">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Search</button>
      <button onclick="printReport()" type="button" class="btn btn-success">Print</button>
    </div>
    </form>
</div>
</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Products as $Product)
    <tr>
      <th scope="row">{{$Product->id}}</th>
      <td>{{$Product->product_name}}</td>
      <td>{{$Product->Categories->category_name}}</td>
      <td>{{$Product->product_price}}</td>
      <td>{{$Product->product_quantity}}</td>
      <td><img width="60" src="{{url('uploads/product',$Product->product_image)}}" alt="" srcset=""></td>
      <td>
        <a class="btn btn-primary" href="{{route('product.edit',$Product->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('product.delete',$Product->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection