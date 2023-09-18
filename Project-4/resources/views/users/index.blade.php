@extends('extra..welcome')
@section('title',"list all users")


@section('content')


<table class="table">
<div class="btn-group" role="group" aria-label="Basic example">
<a href="/users/create" class="btn btn-primary" class="btn btn-secondary">Add New User</a>
<a href="/customers/create" class="btn btn-primary" class="btn btn-secondary">Add New Customer</a>
<a href="/invoices/create" class="btn btn-primary" class="btn btn-secondary">Add New Invoice</a>
</div>
</table>

<table border="2" class="table table-striped">


<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>is_admin</th>

    
    
    <th>option1</th>
    <th>option2</th>
    <th>option3</th>
</tr>

@foreach($users as $user)
<tr>

    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->is_admin}}</td>


    
      

    <td><a class="btn btn-primary mb-3" href="/users/{{$user['id']}}">View</a></td> 
    <td><a class="btn btn-primary mb-3" href="/users/{{$user['id']}}/edit">Edit</a></td> 
    <td>
    <form action="/users/{{$user['id']}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

    </td> 

</tr>    


@endforeach


</table>

<form action="{{ route('users.search') }}" method="POST">
@csrf
<div class="form-group">
<input id="user_id" class="form-control" name="user_id" type="text" value="{{ old('user_id') }}" placeholder="User ID">
</div>
<input class="btn btn-primary mb-2" type="submit" value="Search">
</form>

@endsection