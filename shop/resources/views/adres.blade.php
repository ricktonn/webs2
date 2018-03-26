@extends('layouts.app')

@section('content')
    <h1>Adres</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <strong>Adres</strong>
            </div>
            <div class="col-sm">
                Payment
            </div>
            <div class="col-sm">
                Succes screen
            </div>
        </div>
    </div>
    <form action="{{ route('insertAdres') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" value="{{ Request::old('firstname') }}"/>
            @if ($errors->has('adres.firstname'))
                <div class="alert alert-danger">{{ $errors->first('adres.firstname') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" value="{{ Request::old('lastname') }}"/>
            @if ($errors->has('adres.lastname'))
                <div class="alert alert-danger">{{ $errors->first('adres.lastname') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone Number:</label>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone number" value="{{ Request::old('phonenumber') }}"/>
            @if ($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('adres.phonenumber') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" class="form-control" name="street" id="street" placeholder="Street" value="{{ Request::old('street') }}"/>
            @if ($errors->has('adres.street'))
                <div class="alert alert-danger">{{ $errors->first('adres.street') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="housenumber">House number:</label>
            <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="House number" value="{{ Request::old('housenumber') }}"/>
            @if ($errors->has('adres.housenumber'))
                <div class="alert alert-danger">{{ $errors->first('adres.housenumber') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="zipcode">Zip code:</label>
            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip code" value="{{ Request::old('zipcode') }}"/>
            @if ($errors->has('adres.zipcode'))
                <div class="alert alert-danger">{{ $errors->first('adres.zipcode') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="statecity">State/City:</label>
            <input type="text" class="form-control" name="statecity" id="statecity" placeholder="State/City" value="{{ Request::old('statecity') }}"/>
            @if ($errors->has('adres.statecity'))
                <div class="alert alert-danger">{{ $errors->first('adres.statecity') }}</div>
            @endif
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Next"/>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
@endsection()