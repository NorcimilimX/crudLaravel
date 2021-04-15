@extends('layout')

@section('title', isset($user) ? 'Update > ' .$user->name : 'Create New User')

@section('content')

    <a type="button" class="btn btn-secondary" href="{{ route('users.index') }}">Back to users</a>

    <form method="post"
          @if(isset($user))
          action="{{ route('users.update', $user) }}"
          @else
          action="{{ route('users.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{ old('name', isset($user) ? $user->name : null) }}"
                       type="text"
                       class="form-control form-control-lg list-group-item list-group-item-secondary"
                       placeholder="Name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                 <input name="email"
                        value="{{ old('email', isset($user) ? $user->email : null) }}"
                        type="text"
                        class="form-control form-control-lg list-group-item list-group-item-secondary"
                        placeholder="Email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </div>

    </form>

@endsection
