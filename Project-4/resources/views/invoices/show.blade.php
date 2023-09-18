@extends('extra.welcome')

@section('title',"Show Invoice")


@section('content')


<table border="2" class="table table-striped">


<tr>
<th>Customer_id</th>
    <th>Amount</th>
    <th>Status</th>
    <th>BilledDate</th>
    <th>PaisDate</th>
    
</tr>

<tr>

<td>{{$invoice->customer_id}}</td>
    <td>{{$invoice->amount}}</td>
    <td>{{$invoice->status}}</td>
    <td>{{$invoice->billedDate}}</td>
    <td>{{$invoice->paidDate}}</td>

</tr>
    


@endsection