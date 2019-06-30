@extends('layouts.app')

@section('content')


<form action="{{ url('admin/user',$user->id) }}" method="POST"  enctype="multipart/form-data" >
        @csrf
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
    </div>

        <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
    </div>


    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Facebook</label>
        <input type="text" name="facebook_link" class="form-control" value="{{ $user->profile->facebook_link }}">
    </div>

    <div class="form-group">
        <label for="">Youtube</label>
        <input type="text" name="youtube_link" class="form-control" value="{{ $user->profile->youtube_link }}">
    </div>

    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="image">
        <img src="{{ asset('profile/'.$user->profile->profile_image) }}" width="300" height="300">
    </div>


    <div class="form-group">
        <label for="">About You</label>
        <textarea name="about" id="" cols="30" rows="4" required class="form-control">{{ $user->profile->about }}</textarea>
    </div>

    <input type="submit" value="Save" class="btn btn-primary btn-sm">
</form>

@endsection
