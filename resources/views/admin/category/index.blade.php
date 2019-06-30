@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-success mb-3" href="{{ route('category.create') }}">Add New Category</a>

<table class="table table-striped">
    <tr>

        <td>No</td>
        <td>Name</td>
        <td>Action</td>

    </tr>
@php $i=1;  @endphp

@foreach($categories as $c)
    <tr>

        <td>@php echo $i; $i++; @endphp</td>
        <td>{{ $c->name }}</td>
        <td> <a href="{{ route('category.edit',$c->id) }}" class="badge badge-warning">update</a>

           <form action="{{ route('category.destroy',$c->id) }}" method="POST">
               @csrf
               {{ method_field('DELETE') }}
            <input type="submit" value="Delete" style="display:block" class="badge badge-danger" >
            </form>
           </td>

    </tr>

@endforeach

</table>

@endsection
