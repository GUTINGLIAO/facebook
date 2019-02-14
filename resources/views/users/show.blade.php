@extends('layout.default')
@section('title', 'The palace of user')
@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <section class="user_info">
                {{$user->name}}
            </section>
            <section class="status">
                @if($statuses->count() > 0)
                    <ul class="list-unstyled">
                        @foreach($statuses as $status)
                            @include('statuses._status')
                        @endforeach
                    </ul>
                    <div class=", mt-5">
                        {!! $statuses->render() !!}
                    </div>
                @else
                    <p>no data</p>
                @endif
            </section>
        </div>
    </div>
@stop
