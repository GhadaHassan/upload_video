<nav class="navbar navbar-expand-lg fixed-top bg-secondary ">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
          Project Name
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach ($categories as $cat)
                    <a class="dropdown-item" href="{{ route('front.category', ['id' => $cat->id]) }}">{{$cat->name}}</a>
                  @endforeach
                </div>
              </div>
          </li>

          <li class="nav-item">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Skills
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach ($skills as $skill)
                    <a class="dropdown-item" href="{{ route('front.skill', ['id' => $skill->id]) }}">{{$skill->name}}</a>
                  @endforeach
                </div>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>

          @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
          @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
            @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-header section-dark" style="background-image: url('website/assets/img/antoine-barres.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">Project Name</h1>
          <div class="fog-low">
            <img src="website/assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            <img src="website/assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Any info about your project</h2>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('website/assets/img/clouds.png'); "></div>
    
  </div>