//Deu erro no indexamento do meu código...., essa seria a pagina de login
@extends('master')

@section('content')
<a href="{{route('home)}}">Home</a>
<h2>Login</h2>


@if (auth()->check())
already logged in | {{auth()->user()->firtsname}} <a href="{{route('login.destroy')}}">logout</a>
@else


@error 
<span>{{$message}}</span>
@enderror

<form action="{{ route('login.store')}}"method="post">
    @csrf
    <input type="text"name="email" value="">

    @error('email')
    <span>{{$message}}</span>
    @enderror

    <input type="password"name="senha" value="">

    @error('password')
    <span>{{$message}}</span>
    @enderror

    <button>type="submit">Login</button>
</form>
@endif
@endsection


@extends('master')

@section('content')
<a href="{{route('login.index')}}"Login></a>
<h2>Home</h2>

@endsection