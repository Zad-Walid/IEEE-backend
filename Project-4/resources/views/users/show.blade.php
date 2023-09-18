@extends('extra.welcome')

@section('title',"Show user")


@section('content')


<table border="2" class="table table-striped">


<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>is_admin</th>
    
</tr>

<tr>

<td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->is_admin}}</td>

</tr>
    


@endsection