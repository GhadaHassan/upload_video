<nav class="navbar navbar-expand-lg fixed-top bg-secondary ">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
          {{ trans('main.logo') }}
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
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
          @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">{{ trans('main.login') }}</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">{{ trans('main.register') }}</a>
                    </li>
                @endif
            @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>

