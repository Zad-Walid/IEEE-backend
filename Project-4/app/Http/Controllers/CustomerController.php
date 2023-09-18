<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //
    function index(){

        $customers = Customer::all();
        return view("customers.index",compact('customers'));
        
    }


    function show($id){
        $customer = Customer::find($id);
        return view("customers.show", compact('customer'));
    }


    function create(){

        return view ("customers.create");
    }


    function store(Request $request){
        

        
        //store in db
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->type = $request->type;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->postal_code = $request->postal_code;
        $customer->save();

        return redirect("/customers");
    }

    function edit($id){
       
        $customer = Customer::find($id);

        return view ("customers.edit",compact('customer'));

    }


    function update($id , Request $request){



        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->postal_code = $request->postal_code;
        $customer->save();

        return redirect("/customers");  
        
    }


    function destroy ($id){

        Customer::destroy($id);
        return redirect("/customers");
        
    }
}
