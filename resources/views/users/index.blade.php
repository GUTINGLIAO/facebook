@extends('layout.default')
@section('title', 'members')
@section('content')
    <div class="offset-md-2 col-md-8">
        <h2 class="mb-4 text-center">all members</h2>
        <div class="list-group">
            @foreach($users as $user)
                @include('users._user')
            @endforeach
        </div>
        <div class="mt-3">
            {!! $users->render() !!}
        </div>
    </div>
@stop