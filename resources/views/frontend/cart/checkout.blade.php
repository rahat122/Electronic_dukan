@extends('frontend.master')
@section('contents')

<style>
    html,
    body,
    .wrapper {
        background: #f7f7f7;
    }

    .steps {
        margin-top: -41px;
        display: inline-block;
        float: right;
        font-size: 16px
    }

    .step {
        float: left;
        background: white;
        padding: 7px 13px;
        border-radius: 1px;
        text-align: center;
        width: 100px;
        position: relative
    }

    .step_line {
        margin: 0;
        width: 0;
        height: 0;
        border-left: 16px solid #fff;
        border-top: 16px solid transparent;
        border-bottom: 16px solid transparent;
        z-index: 1008;
        position: absolute;
        left: 99px;
        top: 1px
    }

    .step_line.backline {
        border-left: 20px solid #f7f7f7;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
        z-index: 1006;
        position: absolute;
        left: 99px;
        top: -3px
    }

    .step_complete {
        background: #357ebd
    }

    .step_complete a.check-bc,
    .step_complete a.check-bc:hover,
    .afix-1,
    .afix-1:hover {
        color: #eee;
    }

    .step_line.step_complete {
        background: 0;
        border-left: 16px solid #357ebd
    }

    .step_thankyou {
        float: left;
        background: white;
        padding: 7px 13px;
        border-radius: 1px;
        text-align: center;
        width: 100px;
    }

    .step.check_step {
        margin-left: 5px;
    }

    .ch_pp {
        text-decoration: underline;
    }

    .ch_pp.sip {
        margin-left: 10px;
    }

    .check-bc,
    .check-bc:hover {
        color: #222;
    }

    .SuccessField {
        border-color: #458845 !important;
        -webkit-box-shadow: 0 0 7px #9acc9a !important;
        -moz-box-shadow: 0 0 7px #9acc9a !important;
        box-shadow: 0 0 7px #9acc9a !important;
        background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
    }

    .btn-xs {
        line-height: 28px;
    }

    /*login form*/
    .login-container {
        margin-top: 30px;
    }

    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }

    .login-container input[type=text],
    input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .login-container input[type=text]:hover,
    input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .login-container-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0, 0, 0, 0.1);
        background-color: #357ebd;
        /*#4d90fe;*/
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }

    .login-container-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0, 0, 0, 0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }

    .login-help {
        font-size: 12px;
    }

    .asterix {
        background: #f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
    }

    /* images*/
    ol,
    ul {
        list-style: none;
    }

    .hand {
        cursor: pointer;
        cursor: pointer;
    }

    .cards {
        padding-left: 0;
    }

    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }

    .cards .mastercard {
        background-position: -51px 0;
    }

    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }

    .cards .amex {
        background-position: -102px 0;
    }

    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }

    .cards li:last-child {
        margin-right: 0;
    }

    /* images end */



    /*
 * BOOTSTRAP
 */
    .container {
        border: none;
    }

    .panel-footer {
        background: #fff;
    }

    .btn {
        border-radius: 1px;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        border-radius: 1px;
    }

    .input-sm,
    .form-horizontal .form-group-sm .form-control {
        border-radius: 1px;
    }

    .panel-info {
        border-color: #999;
    }

    .panel-heading {
        border-top-left-radius: 1px;
        border-top-right-radius: 1px;
    }

    .panel {
        border-radius: 1px;
    }

    .panel-info>.panel-heading {
        color: #eee;
        border-color: #999;
    }

    .panel-info>.panel-heading {
        background-image: linear-gradient(to bottom, #555 0px, #888 100%);
    }

    hr {
        border-color: #999 -moz-use-text-color -moz-use-text-color;
    }

    .panel-footer {
        border-bottom-left-radius: 1px;
        border-bottom-right-radius: 1px;
        border-top: 1px solid #999;
    }

    .btn-link {
        color: #888;
    }

    hr {
        margin-bottom: 10px;
        margin-top: 10px;
    }

    /** MEDIA QUERIES **/
    @media only screen and (max-width: 989px) {
        .span1 {
            margin-bottom: 15px;
            clear: both;
        }
    }

    @media only screen and (max-width: 764px) {
        .inverse-1 {
            float: right;
        }
    }

    @media only screen and (max-width: 586px) {
        .cart-titles {
            display: none;
        }

        .panel {
            margin-bottom: 1px;
        }
    }

    .form-control {
        border-radius: 1px;
    }

    @media only screen and (max-width: 486px) {
        .col-xss-12 {
            width: 100%;
        }

        .cart-img-show {
            display: none;
        }

        .btn-submit-fix {
            width: 100%;
        }

    }

    /*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container wrapper">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"></span> <span class="step_line backline"></span> </span>
                    <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "></span> <span class="step_line step_complete"></span> </span>
                    <span class="step_thankyou check-bc step_complete">Thank you</span>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="post" action="{{route('payment')}}">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>
                    </div>
                    <div class="panel-body">
                        @if (session()->has('myCart'))

                        @foreach (session()->get('myCart') as $key=>$cart)

                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img class="img-responsive" src="{{url('uploads/product',$cart['products_image'])}}" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">{{$cart['product_name']}}</div>
                                <div class="col-xs-12"><small>Quantity:<span>{{$cart['product_quantity']}}</span></small></div>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6><span>BDT</span>{{(float) $cart['product_price'] * (int) $cart['product_quantity']}}</h6>
                            </div>
                        </div>
                        <div class="form-group">
                            <hr />
                        </div>
                        @endforeach
                        @endif
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">

                                @php
                                $subtotal = 0;
                                foreach (session()->get('myCart') as $key=>$cart){
                                $subtotal += (float) $cart['subtotal'];
                                }
                                @endphp
                                <strong>Subtotal</strong>
                                <div class="pull-right"><span>BDT</span><span>{{$subtotal}}</span></div>
                            </div>
                            <div class="col-xs-12">
                                <small>Shipping</small>
                                @php
                                $shipping = ($subtotal > 0) ? 10 : 0;
                                @endphp
                                <div class="pull-right"><span>BDT</span><span>{{$shipping}}</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span>BDT</span><span id="total_amount">{{$subtotal + $shipping}}</span>
                                <input type="hidden" name="total_payment" id="total_payment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Shipping Address</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Country:</strong></div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="country" value="" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <strong>First Name:</strong>
                                <input type="text" name="first_name" class="form-control" value="" required/>
                            </div>
                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12">
                                <strong>Last Name:</strong>
                                <input type="text" name="last_name" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Address:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="address" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>City:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="city" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>State:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="state" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="zip_code" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Phone Number:</strong></div>
                            <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" required/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Email Address:</strong></div>
                            <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" required/></div>
                        </div>
                    </div>
                </div>
                <!--SHIPPING METHOD END-->
                <!--CREDIT CART PAYMENT-->
                <div class="panel panel-info">
                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card Type:</strong></div>
                            <div class="col-md-12">
                                <select id="CreditCardType" name="CreditCardType" class="form-control">
                                    <option value="5">Visa</option>
                                    <option value="6">MasterCard</option>
                                    <option value="7">American Express</option>
                                    <option value="8">Discover</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" required/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card CVV:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" required/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Expiration Date</strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Year</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <span>Pay secure using your credit card.</span>
                            </div>
                            <div class="col-md-12">
                                <ul class="cards">
                                    <li class="visa hand">Visa</li>
                                    <li class="mastercard hand">MasterCard</li>
                                    <li class="amex hand">Amex</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CREDIT CART PAYMENT END-->
            </div>

        </form>
    </div>
    <div class="row cart-footer">

    </div>
</div>
@endsection