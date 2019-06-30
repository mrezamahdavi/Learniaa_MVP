@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('tag.index') }}">Back</a>


<form action="{{ route('tag.update',$tag->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
    </div>
    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
