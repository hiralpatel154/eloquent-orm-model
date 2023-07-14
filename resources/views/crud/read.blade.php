@extends('welcome')
@section('content')
<div class="table-box m-5 table-bordered ">
    <table class="table table-striped text-center">
        <thead>
            <th>ID</th>
            {{-- <th>Image</th> --}}
            <th>Employee Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </thead>
        <tbody>

            @foreach($employees as $emp)
            <tr>
                <td>{{$emp -> id}}</td>
                <td>{{$emp -> name}}</td>
                <td>{{$emp -> email_address}}</td>
                <td>{{$emp -> age}}</td>
                <td>
                    <div class="actions">
                        {{-- <a href="" class="btn btn-primary">View</a> --}}
                        <a href="edit/{{$emp->id}}" class="btn btn-warning">Edit</a>
                        <a href="delete/{{$emp->id}}" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
