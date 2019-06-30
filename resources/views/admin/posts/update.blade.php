@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('post.index') }}">Back</a>


<form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
                <label for="">Choose Category</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $c)
                    <option value="{{ $c->id }}" @if($c->id == $post->category_id) selected @endif   >{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="">Choose Tag</label>
                <div class="checkbox">
                    @foreach($tags as $t)
                    <label for=""> {{ $t->name }}
                        <input type="checkbox" value="{{ $t->id }}" name="tags[]"
                        @foreach($post->tags as $tag)
                        @if($tag->id == $t->id)
                        checked
                        @endif
                        @endforeach

                          >
                    </label>

                    @endforeach
                </div>
                </div>



    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="4" required class="form-control">{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="image">
        <img src="{{ asset('images/'.$post->featured) }}" width="300" height="300">
    </div>

    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
