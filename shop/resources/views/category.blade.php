@extends('layouts.app')

@section('content')


    <h1>{{$category or 'No name'}}</h1>
    <div class="row" style="margin-bottom: 2rem;">
    @foreach($products as $product)

            <div class="col-lg-4">
                <div class="card">
                    <a style="text-decoration:none; color: inherit;" href="{{ url('product', $product['id']) }}">
                        <img class="card-img-top" src="{{asset('/images/'.$product['img'])}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product['name']}}</h5>
                            <p class="card-text">{{$product['desc']}}</p>
                            <span class="card-price-text">Price: ${{$product['price']}},00</span>
                            <a href="{{ route('addToCart', ['id' => $product['id']]) }}" class="btn btn-success btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </a>
                        </div>
                    </a>
                </div>
            </div>

    @endforeach
    </div>

@endsection()