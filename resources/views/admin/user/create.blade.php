@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('user.index') }}">Back</a>


<form action="{{ route('user.store') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
