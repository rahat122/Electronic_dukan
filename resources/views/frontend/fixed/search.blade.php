@extends('frontend.master')
@section('contents')


<section class="section-products">
    <div class="container">
        <p>{{$Products->count()}} items found for "{{request()->search_key}}"</p>
        
        <div class="col-md-4">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort By
                </button> <br>

                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="{{route('search.bar',['search_key='.request()->search_key.'&order_by=asc'])}}">Price Low to High</a>
                    <a class="dropdown-item" href="{{route('search.bar',['search_key='.request()->search_key.'&order_by=desc'])}}">Price High to Low</a>

                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center" style="padding-bottom: 20px;">
            <div class="col-md-8 col-lg-6">
                <div class="header">

                    <h2 style="font-size: 30px;">Here is your Search Item</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach($Products as $Product)

            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{url('uploads/product', $Product->products_image)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="{{route('add.cart.page',$Product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$Product->product_name}}</a></h6>
                        <h5>{{$Product->product_price}}</h5>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection