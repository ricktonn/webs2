<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
                    @foreach(App\Category::with('subcategories')->where('p_id',0)->get() as $category)
                        @if($category->subcategories()->count()>0)
                            <a class="dropdown-item" href="{{ url('category')}}/{{$category->name}}"><b>{{$category->name}}</b></a>
                            @foreach($category->subcategories as $subcategory)
                                <a class="dropdown-item shifted" href="#">-{{$subcategory->name}}</a>
                                @endforeach
                            @else
                            <a class="dropdown-item" href="{{ url('category')}}/{{$category->name}}"><b>{{$category->name}}</b></a>
                            @endif
                        
                    @endforeach
                </div>
            </li>

        </ul>
        <ul class="navbar-nav navbar-right">
            @if(Auth::check() && Auth::user()->user_type == "0")
            <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link">Admin panel</a></li>

            @endif
            @if(Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cart') }}">
                            <i aria-hidden="true"></i>Cart
                        <span class="badge" >{{ Session::has('cart') ? Session::get('cart')->amount : ''}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                    </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('register') }}">register</a>
                </li>
            @endif
                <li class="nav-item">
                    <form action="{{ route('productSearch') }}" method="get" class="form-inline">
                        <div>
                            <input type="text" class="form-control" name="s" placeholder="Search">
                        </div>
                        <button class="btn btn-outline-success" style="margin-left: 10px" type="submit">Search</button>
                    </form>
                </li>
        </ul>
    </div>
</nav>