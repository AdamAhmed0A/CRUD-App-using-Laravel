<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("index", ['users' => $users ]);
    }

    public function create(){
        return view("adduser");
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        User::create([
            "name" => $name,
            "email" => $email,
            "number" => $number
        ]);
        
        return redirect("/");
    }

    public function edit($id){
        $users = User::find($id);
        return view("edit", ['users' => $users]);
    }

    public function update(Request $request, $id){
        // $users = User::find($id);
        $users = User::find($id);
        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $users -> update([
            "name" => $name,
            "email" => $email,
            "number" => $number,
        ]);
        return redirect("/");
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect("/");
    }


}
