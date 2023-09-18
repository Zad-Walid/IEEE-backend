
@extends('extra.welcome')

@section('title',"Add New Invoice")


@section('content')

<form method ="post" action="/invoices">
    @csrf
Customer_id <input type="text" name="customer_id" class="form-control" placeholder="Name"></br>
Amount <input type="text" name= "amount" class="form-control" placeholder="amount"></br>
Status <input type="text" name= "status" class="form-control" placeholder="status"></br>
Bill Date <input type="text" name= "billDate" class="form-control" placeholder="date"></br>
Paid Date <input type="text" name= "paidDate" class="form-control" placeholder="date"></br>

<input type="submit" values "Add" class="btn btn-primary mb-3">
</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection