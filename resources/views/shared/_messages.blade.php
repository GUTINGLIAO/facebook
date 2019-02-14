@foreach(['danger', 'success', 'warning', 'info'] as $message)
    @if(session()->has($message))
        <div class="message">
            <p>{{session()->get($message)}}</p>
        </div>
    @endif
@endforeach