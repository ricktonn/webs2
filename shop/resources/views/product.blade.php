@extends('layouts.app')
@section('content')

    <h1>{{$product['title'] or 'No name'}}</h1>
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <a href="{{asset('/images/'.$product['img'])}}">
                            <img class="img-fluid" src="{{asset('/images/'.$product['img'])}}" />
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <span class="card-price-text">${{$product['price']}},00</span>
                        <form method="get" action="#">
                            <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </a>
                        </form>
                    </div>
                </div>
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Description</div>
                    <div class="card-body">
                        <p class="card-text">
                            {{$product['desc']}}
                        </p>
                    </div>
            </div>
        </div>

@endsection()