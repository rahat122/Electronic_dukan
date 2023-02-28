<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>lighten</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('frontend/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{url('frontend/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{url('frontend/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
      <!--[if lt IE 9]>
      <script src="{{url('frontend/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="{{url('frontend/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
      @notifyCss
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- end loader --> 
      <!-- header -->
      @includeIf('frontend.fixed.header')
      
      <!-- end header -->
      <section id="home">
      @include('sweetalert::alert')

         @yield('contents')
         <x:notify-messages />
         
      </section>



<!-- CHOOSE  -->
      
       
<!-- end CHOOSE -->

      <!-- service --> 
      
      <!-- end service -->

      

      <!-- end our product -->
      <!-- map -->
      
      <!--  footer --> 




      @includeIf('frontend.fixed.footer')
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="{{url('frontend/js/jquery.min.js')}}"></script> 
      <script src="{{url('frontend/js/popper.min.js')}}"></script> 
      <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script> 
      <script src="{{url('frontend/js/jquery-3.0.0.min.js')}}"></script> 
      <script src="{{url('frontend/js/plugin.js')}}"></script> 
      <!-- sidebar --> 
      <script src="{{url('frontendjs/jquery.mCustomScrollbar.concat.min.js')}}"></script> 
      <script src="{{url('frontendjs/custom.')}}'"></script>
      <script src="{{url('frontendhttps:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
      <script>
         

         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
   </script> 
      
      @notifyJs 


      <script>
         var obj = {};
         obj.cus_name = $('#customer_name').val();
         obj.cus_phone = $('#mobile').val();
         obj.cus_email = $('#email').val();
         obj.cus_addr1 = $('#address').val();
         obj.amount = $('#total_amount').val();

         let total = $('#total_amount').text();
         //total = total.split("$")[1];
         $('#total_payment').val(total);
         $('#sslczPayBtn').prop('postdata', obj);
      </script>

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>



   </body>
</html>