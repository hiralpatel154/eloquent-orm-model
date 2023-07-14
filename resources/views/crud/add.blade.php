@extends('welcome')
@section('content')
<div class="text-center mb-3">
    {{-- @if($errors)
        @foreach($errors->all() as $error)
        <li class="text-danger list-unstyled">
            {{$error}}
        </li>
        @endforeach
    @endif --}}
</div>
<div class="add-form d-flex justify-content-center">
   
    <form class="border rounded rounded-4 p-3 w-50" action="add" method="POST">
        @csrf
        <div class="d-flex">
            <div class="mb-3 me-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="mb-3 me-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email_address" aria-describedby="emailHelp">
                <span class="text-danger">@error('email_address'){{$message}}@enderror</span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 me-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age">
                <span class="text-danger">@error('age'){{$message}}@enderror</span>
            </div>
        </div>
        {{-- <div class="mb-3">
            <input type='file' name='my_image' />
            <input type='submit' value='Upload' name='uploadfile' class="mt-2">
        </div> --}}
        <hr>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection
