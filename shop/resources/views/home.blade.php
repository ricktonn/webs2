@extends('layouts.app')

@section('content')
<h2>News</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        @foreach($products as $key=>$product)
                @if($key == 0)
                <div class="carousel-inner">
                    @endif
                <div class="carousel-item @if($key == 0) active @endif">
                    <img class="img-home" src="{{asset('/images/'.$product['img'])}}">
                        <div class="carousel-caption text-left grey-color">
                            <div class="container ">
                            <h1>{{$product['name']}}</h1>
                            <p>{{$product['desc']}}</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ url('product', $product) }}" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
        </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
@endsection()