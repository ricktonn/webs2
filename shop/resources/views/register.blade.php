@extends('layouts.app')
@section('content')
    <h2>Registratie</h2>
    <form action="/insertRegister" method="post">
        <div class="form-group">
            {{ csrf_field() }}
            <p>Username:</p>
            <input type="text" class="form-control" name="username" placeholder="Username"/>
            <p>Wachtwoord:</p>
            <input type="text" class="form-control" name="password" placeholder="Password"/>
        </div>
        <input type="submit" class="form-control btn-dark" name="submit" value="add"/>
    </form>
    @endsection()