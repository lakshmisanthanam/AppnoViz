@extends('layouts.homelayout')

@section('loggedIn')
    <div class="loggedin">
        @if (Auth::check()) 
            Hi, {{ Auth::user()->name }} <a href="{{ url('/logout') }}">Logout</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
        @endif
    </div>
@endsection

@section('content')
You are logged In!
@endsection
