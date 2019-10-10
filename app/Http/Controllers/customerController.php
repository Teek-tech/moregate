<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    public function index(){
        return view('shipwithus');
    }

    public function admin(){
         $getPost = Customer::all();
         $allcustomer = Customer::get()->count();
         return view('admin.index',  compact('getPost', 'allcustomer'));
    }

    public function adminall(){
        $getPost = Customer::all();
        //$allcustomer = Customer::get()->count();
        return view('admin.allcustomers',  compact('getPost'));
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

    public function edit($id){
        $editPost = Customer::findOrFail($id);
        return view('admin.editcustomer', compact('editPost'));
    }
  
    public function update(Request $request, $id){

        $input = request()->validate([
            'name'=> 'required|min:6',
            'email'=> 'required|email|unique:Customers,email,'.$id,
            'phone'=> 'required',
            'dateofbirth'=> 'required',
            'company'=> 'required'
        ]); 


        $updatePost =  Customer::findOrFail($id);
        $updatePost->name = $request->input('name');
        $updatePost->email = $request->input('email');
        $updatePost->phone = $request->input('phone');
        $updatePost->dateofbirth = $request->input('dateofbirth');
        $updatePost->company = $request->input('company');
        $updatePost->save();
    
        return redirect('admin')->with('editmessage', 'Details Updated!');
    
    }

    public function delete(Request $request, $id){
        $deletePost =  Customer::findOrFail($id);
        $deletePost->delete();
    
        return back();
    
    }


    // public function searchview(){
    //     return view('admin.index');
    // }

    // public function search(Request $request){
    //    $post = Customer::select('name')
    //           ->where("name", "LIKE", "%{$request->input('search')}%")
    //            ->get(); 
    //     return redirect('admin', ['post'=> $post]);
    // }

    

}
