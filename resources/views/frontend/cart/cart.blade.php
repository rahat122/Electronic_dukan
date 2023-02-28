@extends('frontend.master')
@section('contents')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{url('frontend/assets/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('home')}}">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="shoping__cart__table">

                    <table class="w-100">
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (session()->has('myCart'))

                            @foreach (session()->get('myCart') as $key=>$cart)

                            <form action="{{route('update.cart',$key)}}">
                            <tr>
                                <td class="shoping__cart__item">
                                    <img width="60px" src="{{url('uploads/product', $cart['products_image'])}}" alt="">
                                    <h5>{{$cart['product_name']}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cart['product_price']}} BDT
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" min="1" max="5" name="qty" value="{{$cart['product_quantity']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{$cart['subtotal']}} BDT
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a class="btn btn-danger" href="{{route('delete.cart',$key)}}"><i class="icon-trash icon-large"></i> Delete</a>
                                </td>

                               <td class="shoping__cart__item__close">
                                    

                                    <button class="btn btn-danger" type="submit">Update</button>
                                </td>

                            </tr>
                            </form>
                            @endforeach
                            @else
                            <p>Nothing in the cart</p>

                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        Upadate Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                         
                        <li>Total <span>{{ session()->get('myCart')? array_sum(array_column($carts=session()->get('myCart'),'subtotal')):0}}</span></li>
                    </ul>
                    <a href="{{route('checkout')}}" class="btn btn-primary">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->


<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();
    
    $('#sslczPayBtn').prop('postdata', obj);
</script>

@endsection