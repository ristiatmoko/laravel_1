<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>HabibSileh<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar navbar-light">
            <ul>
                <li><a href="/" class="{{ $active === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="/posts" class="{{ $active === 'posts' ? 'active' : '' }}">Blog</a></li>
                <li><a href="/categories" class="{{ $active === 'categories' ? 'active' : '' }}">Category</a></li>
                @auth
                <li class="dropdown nav-link "><a href=""><span>Welcome, {{ auth()->user()->username }}</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href=""><i class="bi bi-house"></i>My Dashboard</a></li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-arrow-right-square"></i>Logout</button>
                        </form>
                    </ul>
                </li>
                @else
                    <li><a href="/login" class="{{ $active === 'login' ? 'active' : '' }}">Login</a></li>
                @endauth
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
