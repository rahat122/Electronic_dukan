<header>
  <!-- header inner -->
  <div class="header" style="padding: 0px;">
    <div class="head_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="top-box">
              <ul class="sociel_link">
                @if(auth()->user())
                <li><a href="{{route('cart.details')}}"> <i class="fa fa-shopping-bag"></i><span> Cart({{session()->has('myCart')?count(session()->get('myCart')):0}})</span>
                  </a></li>
                @endif
                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6"></div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 pl-auto">
          @guest
              <div class="d-flex pt-2">
              <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#registration">
                Registration
              </button>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">
                Login
              </button>
              </div>

              @endguest

              @auth
              <div class="d-flex pt-2">
              <button class="btn btn-success mr-2">{{auth()->user()->name}}</button>
              <button class="btn btn-success"><a href="{{route('logout.front')}}">Log Out</a></button>
              </div>
              @endauth
            


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row" style="padding-bottom: 30px;">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
        <div class="full">
          <div class="center-desk">
            <div class="logo"> <a href="{{route('home')}}"><img src="{{url('frontend/images/logo.jpg')}}" alt="logo" /></a> </div>
          </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
        <div class="menu-area">
          <div class="limit-box">
            <nav class="main-menu">
              <ul class="menu-area-main">
                <div class="top-lef">
                  <form action="{{route('search.bar')}}">
                    <div class="input-group">
                      <input type="search" style="padding: 10px;" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="Submit " class="btn btn-primary">search</button>
                    </div>
                  </form>
                </div>
                <li class="active"> <a href="{{route('home')}}">Home</a> </li>
                <li> <a href="about.html">About</a> </li>
                <li> <a href="product.html">product</a> </li>
                <li> <a href="blog.html"> Blog</a> </li>
                <li> <a href="contact.html">Contact</a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end header inner -->

</header>

<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('registration.front')}}" method='POST'>
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Name</label>
            <input type="text" name="name" id="form2Example1" class="form-control" />
          </div>


          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" name="email" id="form2Example1" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" name="password" id="form2Example2" class="form-control" />
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('login.front')}}" method='POST'>
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" name="email" id="form2Example1" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" name="password" id="form2Example2" class="form-control" />
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
      </div>


      </form>
    </div>
  </div>
</div>