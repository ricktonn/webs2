@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <h1 stlye="center">Succes your order ID is: <strong>{{$ID}}</strong></h1>
        </div>
    </div>
    <a href="{{ url('/') }}">
        <button type="button" class="btn btn-success">Go Home</button>
    </a>

@endsection()