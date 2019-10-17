<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin(){
         $getPost = Customer::all();
         $allcustomer = Customer::get()->count();
         $allshipment = Shipment::get()->count();
         return view('admin.index',  compact('getPost', 'allcustomer', 'allshipment'));
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
    
        return back()->with('deletemessage','Customer deleted!');
    
    }

    public function index()
    {
        $getPost = Customer::all();
        $allcustomer = Customer::get()->count();
        return view('admin.index', compact('allcustomer', 'getPost'))->with('success', 'You are logged in!');
    }
}
