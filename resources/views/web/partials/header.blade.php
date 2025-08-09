  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">01780746318</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Sat-Th 9:00 am to 6:00 pm</li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">icer.bangladesh1@gmail.com</a> </li>
              </ul>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="#" class="text-white">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="{{route('home') }}">
              <img src="{{ $generalSettings['logo'] }}" alt="">
            </a>
            <ul class="menuzord-menu">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">About</a>
                </li>
                {{-- <li class="{{ request()->routeIs('shop') ? 'active' : '' }}">
                    <a href="{{ route('shop') }}">Shop</a>
                </li> --}}

                <li class="{{ request()->routeIs('course') ? 'active' : '' }}">
                    <a href="{{ route('course') }}">Course</a>
                </li>

                <li class="{{ request()->routeIs('study-abroad') ? 'active' : '' }}">
                    <a href="{{ route('study-abroad') }}">Study Abroad</a>
                </li>

                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>

                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="#">Get In Touch</a>
                    <ul class="dropdown">
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
