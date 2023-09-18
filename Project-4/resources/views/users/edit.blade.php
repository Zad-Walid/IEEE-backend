
@extends('extra.welcome')

@section('title',"Edit User")


@section('content')

<form method ="post" action="/users/{{$user['id']}}" >

    @csrf
    @method('put')
    
Name <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}"></br>
Email <input type="text" name= "email" class="form-control" placeholder="email" value="{{$user->email}}"></br>
Password <input type="password" name= "password" class="form-control" placeholder="password" value="{{$user->password}}"></br>
is_admin <input type="text" name= "is_admin" class="form-control" placeholder="admin" value="{{$user->is_admin}}"></br>


<input type="submit" values="Update"  class="btn btn-primary mb-3">

</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection