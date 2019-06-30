@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('category.index') }}">Back</a>


<form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" name="category" class="form-control" value="{{ $category->name }}">
    </div>
    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
