<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;


class formController extends Controller
{
    public function form(){
        return view ('welcome');
    }
    public function data(Request $request){
        print_r($request->all());
        $request->validate([
        'name' => 'required',
        'email' => 'required | email',
        'password' => 'required'
        ]);

        $users = new form();
        $users->name=$request['name'];
        $users->email=$request['email'];
        $users->password=$request['password'];
        $users->save();
        return redirect('/form');
    }
    public function user_view(){
        $user_Data  = Form::all();

        $data = compact('user_Data');
        return view('welcome')->with($data);
    }
    public function user_dlt($id){
       $find = form::find($id)->delete();
       return redirect('/form');
    }
}
