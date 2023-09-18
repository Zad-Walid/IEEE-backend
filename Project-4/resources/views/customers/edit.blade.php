
@extends('extra.welcome')

@section('title',"Edit Customer")


@section('content')

<form method ="post" action="/customers/{{$customer['id']}}" >

    @csrf
    @method('put')
    
Name <input type="text" name="name" class="form-control" placeholder="Name" value="{{$customer->name}}"></br>
Email <input type="text" name= "email" class="form-control" placeholder="email" value="{{$customer->email}}"></br>
type <input type="text" name= "type" class="form-control" placeholder="email" value="{{$customer->type}}"></br>
Address <input type="text" name="address" class="form-control" placeholder="address" value="{{$customer->address}}"></br>
City <input type="text" name="city" class="form-control" placeholder="city" value="{{$customer->city}}"></br>
State <input type="text" name="state" class="form-control" placeholder="state" value="{{$customer->state}}"></br>
Postal Code <input type="text" name="postal_code" class="form-control" placeholder="postal_code" value="{{$customer->postal_code}}"></br>


<input type="submit" values="Update"  class="btn btn-primary mb-3">

</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection