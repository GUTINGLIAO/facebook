<form action="{{route('statuses.store')}}" method="post">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" rows="3" placeholder="tell me that you love me" name="content">{{old('content')}}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">publish</button>
    </div>
</form>