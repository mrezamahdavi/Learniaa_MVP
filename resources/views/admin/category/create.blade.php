@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('category.index') }}">Back</a>


<form action="{{ route('category.store') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" name="category" class="form-control">
    </div>
    
    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
