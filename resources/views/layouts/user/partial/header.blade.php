<section class=""><!--navbar-->
  <style>
    a{
      font-size: 18px;

    }
  </style>
    <nav style="background-color: #e3f2fd " class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid container">
          <a class=" navbar-brand" href="{{url('/')}}"><i  class=" h2 fas fa-book-open"></i> <span class="h2">Old Book Sharing</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div style="margin-left: 50px">
          <form class="" action="{{url('search')}}" method="POST">
            @csrf
            <div style="padding-bottom: 1%" class="input-group">
              <input  type="text" name="search" class="form-control" placeholder="Search Book">
              <input  type="submit"  class="btn btn-dark btn-sm" value="Search" id="">
              
            </div>
          </form>
        </div>
            <ul  class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto">
              <li class="nav-item">
                <a style=" font-weight: bold; "  class=" nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li  class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul style="background-color:#e3f2fd" class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category )
                <li><a class="dropdown-item" href="{{ url('category',$category->id) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Location
                </a>
                <ul style="background-color:#e3f2fd" class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($locations as $location)
                <li><a class="dropdown-item" href="{{ url('location',$location->id) }}">{{ $location->name }}</a></li>
                @endforeach
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('book') }}">Book's</a>
              </li>

              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About Us</a>
              </li> --}}

              <li class="nav-item">
                <a class="nav-link" href="{{ url('user/cart-detail') }}"><i class="fas fa-cart-arrow-down"></i> <span>{{ App\Models\Cart::total_item_cart() }}</span></a>
              </li>

              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
              </li> --}}

              <li class="nav-item dropdown">
                @if (Auth::check())
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class=" h3 fas fa-user-circle"></i>
                </a>
                @if(Auth::user()->role->id==1)
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
                @else
                <ul style="background-color: #e3f2fd " class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                    <li><a class="dropdown-item" href="{{ url('user/book/create') }}">Create a Book</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/book/index') }}">Book List </a></li>
                    <li><a class="dropdown-item" href="{{ url('user/order') }}">Order</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a></li>
                </ul>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                @endif
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
</section><!--end of navbar-->

