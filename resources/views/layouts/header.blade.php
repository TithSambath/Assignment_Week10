<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

    <h1 class="logo"><a href="index.html">CRUD</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
        <ul>
            @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
            @else
                <li><a href="{{ url('/') }}">Home</a></li>
            @endauth              
        </ul>
    </nav><!-- .nav-menu -->

    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6  sm:block">
        @auth
            {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
    @endif

    </div>
</header><!-- End Header -->