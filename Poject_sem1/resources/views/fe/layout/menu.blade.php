<nav class="navbar navbar-expand-lg navbar-light app_2">
    <div class="container-fluid navbar_cren">
  
      <a class="navbar-brand" href="#"> <i class="fas fa-headset"></i></a>
      <ul>
        <li>FREE SUPPORT</li>
        <li>(+85)0963956023</li>
      </ul>
      <img src="image/logo.jpg" class="img-fluid" alt="" style="padding-left: 160px;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: center;">

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="app">
    <div class="container ">

      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#" style="font-size: x-large;"><i>FATCI</i></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse container" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>
            <li class="nav-item dropdown active container">
              <a class="nav-link " href="pages.html" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact</a>
        </li>
          </ul>
        </div>
        <div class=" container icon ">
          <ul class="icon-header">
           <a href="show_cart.html" style="color: black;"> <li><i class="fas fa-shopping-cart"></i>
            cart: 0.00
          </li></a>
            <a href="{{route('login')}}" style="color: black;">
              @if (Auth::user())
              <li><a href="{{route('logout')}}" style="color: white"><i class="fas fa-sign-in-alt"></i></a>
                {{(Auth::user()->name)?Auth::user()->name:''}}</li>
               
                      
                  @else
                  <li><i class="far fa-user"></i>
                    My account
                  </li>
              @endif
           
            </a>

           
          </ul>
        </div>
      </nav>
    </div>
  </div>

