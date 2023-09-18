
@extends('extra.welcome')

@section('title',"Add New User")


@section('content')

<form method ="post" action="/users">
    @csrf
Name <input type="text" name="name" class="form-control" placeholder="Name"></br>
Email <input type="text" name= "email" class="form-control" placeholder="email"></br>
Password <input type="password" name= "password" class="form-control" placeholder="password"></br>
is_admin <input type="text" name= "is_admin" class="form-control" placeholder="admin"></br>

<input type="submit" values "Add" class="btn btn-primary mb-3">
</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection