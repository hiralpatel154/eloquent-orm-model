@extends('welcome')
@section('content')
<div class="add-form d-flex justify-content-center">
    <form class="border rounded rounded-4 p-3 w-50" action="/update" method="POST">
        @csrf
        <div class="d-flex">
            <input type="hidden" name="id" value="{{$employees['id']}}">
            <div class="mb-3 me-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$employees['name']}}">
            </div>
            <div class="mb-3 me-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$employees['email_address']}}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 me-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age"  value="{{$employees['age']}}">
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
