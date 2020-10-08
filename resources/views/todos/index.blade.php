@extends('welcome')
@section('content')

<div class="row">
    <div class="col-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('todos.create') }}" class="btn btn-success">{{  __('Create new todo') }}</a>
            </div>
            <div class="card-body">
                    <h2>{{  __('Todo App') }}</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Date</th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                            </tr>
                        </thead>
                        <tbody>
@forelse ($todos as $todo)
<tr>
    <td scope="row">{{  $todo->id }}</td>
    <td>{{  $todo->title }}</td>
    <td>{{ $todo->body }}</td>
    <td>{{ $todo->created_at->format('Y-m-d') }}</td>
    <td>
        <a class="btn btn-sm btn-primary" href="{{  route('todos.edit', $todo) }}">{{  __('Edit') }}</a>
    </td>
    <td>
        <form action="{{  route('todos.destroy', $todo) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete')}}</button>
        </form>
    </td>
</tr>
@empty
<p class="text-center">{{ __('Nothing to show') }}</p>
@endforelse

                        </tbody>
                    </table>
                </div>

        </div>

    </div>
</div>
@endsection
