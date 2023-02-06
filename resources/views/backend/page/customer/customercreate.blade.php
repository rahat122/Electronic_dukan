@extends('backend.master')
@section('contents')

<form action="{{route('customer.submit')}}"method="POST"> 

@csrf

<div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
        </div>

        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required >
        </div>

        <div class="form-group">
            <label for="">Email</label></br>
             <input type="email" name="email_address" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
            <label for="">Contact</label></br>
            <input type="number" name="contact_number" placeholder="Enter Contact" required>
        </div>

        <div class="form-group">
            <label for="">Customer Address</label>
            <input type="text" name="customer_address" class="form-control" placeholder="Enter Cusrtomer Address" required>
        </div>

        <button type="submit " class="btn btn-primary">Submit</button>

    </div>    

         

</form>
@endsection