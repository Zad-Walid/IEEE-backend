@extends('extra.welcome')

@section('title',"Show Customer")


@section('content')


<table border="2" class="table table-striped">


<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>state</th>
    <th>Postal Code</th>
    
</tr>

<tr>

    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->address}}</td>
    <td>{{$customer->city}}</td>
    <td>{{$customer->state}}</td>
    <td>{{$customer->postal_code}}</td>

</tr>
    


@endsection