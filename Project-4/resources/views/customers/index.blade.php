@extends('extra..welcome')
@section('title',"list all customers")


@section('content')
<table class="table">
<div class="btn-group" role="group" aria-label="Basic example">
<!-- <a href="/users/create" class="btn btn-primary" class="btn btn-secondary">Add New User</a> -->
<a href="/customers/create" class="btn btn-primary" class="btn btn-secondary">Add New Customer</a>
<a href="/invoices/create" class="btn btn-primary" class="btn btn-secondary">Add New Invoice</a>
</div>
</table>



<table border="2" class="table table-striped">


<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>state</th>
    <th>Postal Code</th>
    
    
    <th>option1</th>
    <th>option2</th>
    <th>option3</th>
</tr>

@foreach($customers as $customer)
<tr>

    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->address}}</td>
    <td>{{$customer->city}}</td>
    <td>{{$customer->state}}</td>
    <td>{{$customer->postal_code}}</td>

    
      

    <td><a class="btn btn-primary mb-3" href="/customers/{{$customer['id']}}">View</a></td> 
    <td><a class="btn btn-primary mb-3" href="/customers/{{$customer['id']}}/edit">Edit</a></td> 
    <td>
    <form action="/customers/{{$customer['id']}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

    </td> 

</tr>    
@endforeach

</table>
@endsection