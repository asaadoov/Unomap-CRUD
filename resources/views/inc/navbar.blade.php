
<!-- Header -->
<header id="header" >
    <div id="header_wrap">
        <!-- Logo (LEFT) -->
        <div id="logo"><a title="Logo" class="text-light " href="{{ url('/posts') }}"><img src="{{ asset('css/images/logo.jpg') }}" alt="Logo" width="30" height="30" /></a> </div>
         {{-- {{ config('app.name', 'Laravel') }} --}}
        <!-- Navigation (LEFT) -->
        <div id="navigation">
            <!-- Responsive Layout Only -->
            <div class="navigation_title"><i class="fa fa-bars"></i> MENU</div>
            <!-- Nav Bar (LEFT) -->
            <nav class="text-center ml-4" >
                <ul class="text-center ml-4 ">
                    <li><a href="{{ route('posts.index') }}" class="nav_link text-center" id="nav_current" title="Posts">Posts</a></li>
                </ul>
            </nav>

          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                <li>
                  <a class="nav_link text-white" style="float: right;" href="{{ route('login') }}">{{ __('Login') }}</a>
                  @if (Route::has('register'))
                    <a class="nav_link text-white" style="float: right;" href="{{ route('register') }}">{{ __('Register') }}</a>
                  @endif
                </li>
              @else
                  <li >

                      <a role="button" style="float: right; color: #3490dc;"  class="mx-2" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <a  href="{{ route('logout') }}"
                          style="float: right; color: #fff;"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout |  ') }}
                      </a>
                      <a href="{{ route('dashboard') }}" class="text-center mx-2" style="float: right;color: #fff;"> Dashboard </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
              @endguest
          </ul>
          </div>
        </div>
    </div>
</header>

