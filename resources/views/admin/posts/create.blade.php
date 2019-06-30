@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('post.index') }}">Back</a>


<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label for="">Choose Category</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <label for="">Choose Tag</label>
                <div class="checkbox">
                    @foreach($tags as $tag)
                    <label for=""> {{ $tag->name }}
                        <input type="checkbox" name="tags[]"value="{{ $tag->id }}" >
                    </label>
                    @endforeach
                </div>
                </div>




    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <textarea name="Description" id="" cols="30" rows="4" required class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="image">
    </div>

    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
