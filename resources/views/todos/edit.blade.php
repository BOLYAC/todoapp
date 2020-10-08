@extends('welcome')
@section('content')

<div class="row mt-5">
<div class="card col-6 mx-auto">
    <div class="card-header">
        <h5>Edit: {{ $todo->title }}</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('todos.update', $todo) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">{{  __('Title') }}</label>
              <input type="text" class="form-control" id="title" name="title" value="{{  old('title', $todo->title) }}">
            </div>
            <div class="form-group">
              <label for="body">{{  __('Body') }}</label>
              <textarea type="text" class="form-control" id="body" name="body">{{  old('body', $todo->body) }}</textarea>
            </div>
            <a href="{{  url()->previous() }}" class="btn btn-warning">{{  __('Cancel') }}</a>
            <button type="submit" class="btn btn-primary float-right">{{  __('Submit') }}</button>
          </form>
        </div>
    </div>
</div>
@endsection
