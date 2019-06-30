@extends('layouts.app')

@section('content')


<a class="btn btn-sm btn-success mb-3" href="{{ route('user.create') }}">Add New User</a>

<table class="table table-striped">
    <tr>

        <td>No</td>
        <td>Image</td>
        <td>Name</td>
        <td>Role</td>
        <td>Set Permission</td>

    </tr>
@php $i=1;  @endphp

@foreach($users as $c)
    <tr>

        <td>@php echo $i; $i++; @endphp</td>
        <td>
            <img src="{{ asset('profile/'.$c->profile->profile_image) }}" width="50" style="border-radius:50%" height="50" alt="">
        </td>
        <td>{{ $c->name }}</td>

        <td>
            @if($c->is_admin ==1)
            Admin
            @else
            User
            @endif

        </td>
        <td>
            @if($c->is_admin == 0)
            <a href="{{ route('user.role.edit',[1,$c->id]) }}" class="badge badge-warning">Set Admin</a>
            @else
            <a href="{{ route('user.role.edit',[0,$c->id]) }}" class="badge badge-success">Set User</a>
            @endif
        </td>

    </tr>

@endforeach

</table>

@endsection
