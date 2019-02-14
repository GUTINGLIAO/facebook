@extends('layout.default')
@section('title', 'home')
@section('content')
<div class="jumbotron">
    <h1>home</h1>
    <p class="lead">
        Welcome to the land of G
    </p>
    <a class="btn btn-lg btn-success" href="{{route('signup')}}">sign up now</a>
</div>
@endsection