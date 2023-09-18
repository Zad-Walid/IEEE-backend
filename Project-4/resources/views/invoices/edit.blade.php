
@extends('extra.welcome')

@section('title',"Edit Invoice")


@section('content')

<form method ="post" action="/invoices/{{$invoice['id']}}" >

    @csrf
    @method('put')
    
Customer_id <input type="text" name="customer_id" class="form-control" placeholder="Name" value="{{$invoice->customer_id}}"></br>
Amount <input type="text" name= "amount" class="form-control" placeholder="amount" value="{{$invoice->amount}}"></br>
Status <input type="text" name= "status" class="form-control" placeholder="status" value="{{$invoice->status}}"></br>
Bill Date <input type="text" name= "billedDate" class="form-control" placeholder="date" value="{{$invoice->billedDate}}"></br>
Paid Date <input type="text" name= "paidDate" class="form-control" placeholder="date" value="{{$invoice->paidDate}}"></br>


<input type="submit" values="Update"  class="btn btn-primary mb-3">

</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection