@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-warning mb-3" href="{{ route('post.index') }}">Back</a>
<p> Title : {{ $post->title }}</p>
<p> Category : {{ $post->category->name }}</p>
<p>Description : </p>
<p> {{ $post->content }}</p>
<p> Image : </p>
    <p><img src="{{ asset('images/'.$post->featured ) }}" width="600" height="300" ></img> : </p>

@endsection
