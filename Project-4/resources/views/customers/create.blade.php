
@extends('extra.welcome')

@section('title',"Add New Customer")


@section('content')

<form method ="post" action="/customers">
    @csrf
Name <input type="text" name="name" class="form-control" placeholder="Name"></br>
Email <input type="text" name= "email" class="form-control" placeholder="email"></br>
type <input type="text" name= "type" class="form-control" placeholder="email"></br>
Address <input type="text" name="address" class="form-control" placeholder="address"></br>
City <input type="text" name="city" class="form-control" placeholder="city"></br>
State <input type="text" name="state" class="form-control" placeholder="state"></br>
Postal Code <input type="text" name="postal_code" class="form-control" placeholder="postal_code"></br>

<input type="submit" values "Add" class="btn btn-primary mb-3">
</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection