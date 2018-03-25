@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <img style="width: 50px" style="height: 50px" src="{{asset('/images/'.$product['item']['img'])}}" />
                                    <span class="input-group-btn">
                                        <a href="{{ route('cartReduce', ['id' => $product['item']['id']]) }}" class="btn btn-danger btn-number">
                                            <span>-</span>
                                        </a>
                                    </span>
                                <span>{{$product['count'] }}</span>
                                <span class="input-group-btn">
                                        <a href="{{ route('addToCart', ['id' => $product['item']['id']]) }}" class="btn btn-success btn-number">
                                            <span>+</span>
                                        </a>
                                </span>
                                <string>{{ $product['item']['name'] }}</string>
                                <span class="label-success">{{$product['price']}}</span>
                                <div class="btn-group">
                                <ul >
                                    <li><a href="{{ route('cartRemove', ['id' => $product['item']['id']]) }}">remove</a></li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <string>Total: {{ $price }}</string>
            </div>
    </div>
    @else
        <div class="alert alert-warning">
            <strong>Warning! </strong>No items found!
        </div><br />
@endif
@endsection()