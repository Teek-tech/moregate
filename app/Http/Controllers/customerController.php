<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    public function index(){
        return view('shipwithus');
    }

    public function store(Request $request){ 

      $savePost = new Customer;
      $savePost->name = $request->input('name');
      $savePost->email = $request->input('email');
      $savePost->phone = $request->input('phone');
      $savePost->dateofbirth = $request->input('dateofbirth');
      $savePost->company = $request->input('company');
      //dd($savePost->body);
      
      $input = request()->validate([
        'name'=> 'required|min:6',
        'email'=> 'required|email|unique:Customers,email',
        'phone'=> 'required',
        'dateofbirth'=> 'required',
        'company'=> 'required'
     ]); 


      $savePost->save();
      return back()->with('message', 'Registration Complete!');

    }

   


    

}
