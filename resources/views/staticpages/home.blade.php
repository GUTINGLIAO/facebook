@extends('layout.default')
@section('title', 'home')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="col-md-4">
                <div class="lead">
                    {{Auth::user()->name}}
                </div>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>home</h1>
            <p class="lead">
                Welcome to the land of G
            </p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}">sign up now</a>
        </div>
    @endif
@endsection