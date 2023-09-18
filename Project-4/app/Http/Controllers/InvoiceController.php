<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function index(){

        $invoices = Invoice::all();
        return view("invoices.index",compact('invoices'));
        
    }


    function show($id){
        $invoice = Invoice::find($id);
        return view("invoices.show", compact('invoice'));
    }


    function create(){

        return view ("invoices.create");
    }


    function store(Request $request){
        

        
        //store in db
        $invoice = new Invoice;
        $invoice->customer_id = $request->customer_id;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->billedDate = $request->billedDate;
        $invoice->paidDate = $request->paidDate;

        $invoice->save();

        return redirect("/invoicees");
    }

    function edit($id){
       
        $invoice = Invoice::find($id);

        return view ("invoices.edit",compact('invoice'));

    }


    function update($id , Request $request){



        $invoice = Invoice::find($id);
        $invoice->customer_id = $request->customer_id;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->billedDate = $request->billedDate;
        $invoice->paidDate = $request->paidDate;

        $invoice->save();

        return redirect("/invoices");  
        
    }


    function destroy ($id){

        Invoice::destroy($id);
        return redirect("/invoices");
        
    }
}
