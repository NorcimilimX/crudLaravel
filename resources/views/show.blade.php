@extends('layout')

@section('title', 'User > '.$user->name)

@section('content')

    <a type="button" class="btn btn-secondary" href="{{ route('users.index') }}">Back to users</a>

    <div class="card text-white bg-dark mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-warning">ID: {{ $user->id }}</li>
            <li class="list-group-item list-group-item-action list-group-item-dark">Name: {{ $user->name }}</li>
            <li class="list-group-item list-group-item-action list-group-item-dark">Email: {{ $user->email }}</li>
            <li class="list-group-item list-group-item-action list-group-item-dark">Created: {{ $user->created_at->format('d/m/y H:i:s') }}</li>
            <li class="list-group-item list-group-item-action list-group-item-dark">Updated: {{ $user->updated_at->format('d/m/y H:i:s') }}</li>
        </ul>
    </div>

    <form method="post" class="mt-3" action="{{ route('users.destroy', $user) }}">

        <a type="button" class="btn btn-warning" href="{{ route('users.edit', $user) }}">Edit</a>
        @csrf
        @method('DELETE')

        <button class="btn btn-danger" type="submit">Delete</button>
    </form>

@endsection
