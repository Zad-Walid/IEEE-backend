@extends('extra..welcome')
@section('title',"list all invoices")


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
    <th>Customer_id</th>
    <th>Amount</th>
    <th>Status</th>
    <th>BilledDate</th>
    <th>PaidDate</th>

    
    
    <th>option1</th>
    <th>option2</th>
    <th>option3</th>
</tr>

@foreach($invoices as $invoice)
<tr>

    <td>{{$invoice->customer_id}}</td>
    <td>{{$invoice->amount}}</td>
    <td>{{$invoice->status}}</td>
    <td>{{$invoice->billedDate}}</td>
    <td>{{$invoice->paidDate}}</td>


    
      

    <td><a class="btn btn-primary mb-3" href="/invoices/{{$invoice['id']}}">View</a></td> 
    <td><a class="btn btn-primary mb-3" href="/invoices/{{$invoice['id']}}/edit">Edit</a></td> 
    <td>
    <form action="/invoices/{{$invoice['id']}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

    </td> 

</tr>    
@endforeach

</table>
@endsection