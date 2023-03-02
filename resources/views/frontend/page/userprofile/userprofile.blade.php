@extends('frontend.master')
@section('contents')
<form action="{{route('profile.update')}}"method ='POST'>
@csrf
@method('put')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><input type="file" name="image"> <span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" name="name" placeholder="name" value="{{auth()->user()->name}}"></div>
                    <div class="col-md-6"><label class="labels">email</label><input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" placeholder="email"></div>
                </div>
                 
                 
                <button type="submit" class="btn btn-success">Save Profile</button>
            </div>
        </div>
         
    </div>
</div>
</form>

@endsection