@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-success mb-3" href="{{ route('post.create') }}">Add New Post</a>

<table class="table table-striped" >
    <tr>

        <td>No</td>
        <td>Name</td>
        <td>Action</td>

    </tr>
@php $i=1;  @endphp

@foreach($posts as $c)
    <tr>

        <td>@php echo $i; $i++; @endphp</td>
        <td>{{ $c->title }}</td>
        <td> <a href="{{ route('post.edit',$c->id) }}" class="badge badge-warning">update</a>
            <a href="{{ route('post.show',$c->id) }}" class="badge badge-success">view</a>

           <form action="{{ route('post.destroy',$c->id) }}" method="POST">
               @csrf
               {{ method_field('DELETE') }}
            <input type="submit" value="Delete" style="display:block" class="badge badge-danger" >
            </form>
           </td>

    </tr>

@endforeach

</table>



@endsection
