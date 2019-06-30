@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-success mb-3" href="{{ route('tag.create') }}">Add New Tag</a>

<table class="table table-striped">
    <tr>

        <td>No</td>
        <td>Name</td>
        <td>Action</td>

    </tr>
@php $i=1;  @endphp

@foreach($tags as $c)
    <tr>

        <td>@php echo $i; $i++; @endphp</td>
        <td>{{ $c->name }}</td>
        <td> <a href="{{ route('tag.edit',$c->id) }}" class="badge badge-warning">update</a>

           <form action="{{ route('tag.destroy',$c->id) }}" method="POST">
               @csrf
               {{ method_field('DELETE') }}
            <input type="submit" value="Delete" style="display:block" class="badge badge-danger" >
            </form>
           </td>

    </tr>

@endforeach

</table>

@endsection
