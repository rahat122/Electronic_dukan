@extends('backend.master')
@section('contents')
<form action="{{route('customer.update',$Customer->id)}}"method="POST"> 

@method('PUT')

@csrf

<div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{$Customer->first_name}}">
        </div>

        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{$Customer->last_name}}">
        </div>

        <div class="form-group">
            <label for="">Email</label></br>
             <input type="email" name="email_address" placeholder="Enter Email" value="{{$Customer->email_address}}">
        </div>

        <div class="form-group">
            <label for="">Contact</label></br>
            <input type="number" name="contact_number" placeholder="Enter Contact" value="{{$Customer->contact_number}}">
        </div>

        <div class="form-group">
            <label for="">Customer Address</label>
            <input type="text" name="customer_address" class="form-control" placeholder="Enter Cusrtomer Address" value="{{$Customer->customer_address}}">
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection