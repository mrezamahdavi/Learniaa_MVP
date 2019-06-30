@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('tag.index') }}">Back</a>


<form action="{{ route('tag.store') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Tag Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
