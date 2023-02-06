@extends('backend.master')
@section('contents')
<a class="btn btn-primary" href="{{route('product.create')}}">Create</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Products as $Product)
    <tr>
      <th scope="row">{{$Product->id}}</th>
      <td>{{$Product->product_name}}</td>
      <td>{{$Product->product_price}}</td>
      <td>{{$Product->product_quantity}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('product.edit',$Product->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('product.delete',$Product->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$Products->links()}}
@endsection