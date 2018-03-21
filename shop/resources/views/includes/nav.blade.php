<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">De dampende boykes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('category', 'startersets') }}">Starter sets</a>
                    <a class="dropdown-item" href="{{ route('category', 'liquid') }}">E-liquids</a>
                </div>
            </li>

        </ul>
        <ul class="navbar-nav .ml-auto">
            <li class="nav-item"><a href="/admin" class="nav-link">Admin panel</a></li>
            @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('loginpage') }}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">register</a>
                </li>
            @endif
        </ul>
    </div>
    </div>
</nav>