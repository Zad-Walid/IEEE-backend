<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){

        $users = User::all();
        return view("users.index",compact('users'));
        
    }


    function show($id){
        $user = User::find($id);
        return view("users.show", compact('user'));
    }


    function create(){

        return view ("users.create");
    }


    function store(Request $request){
        

        
        //store in db
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;

        $user->save();

        return redirect("/users");
    }

    function edit($id){
       
        $user = User::find($id);

        return view ("users.edit",compact('user'));

    }


    function update($id , Request $request){



        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;

        $user->save();
        
        return redirect("/users");  
        
    }


    function destroy ($id){

        User::destroy($id);
        return redirect("/users");
        
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
    }
}
