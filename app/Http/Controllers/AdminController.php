<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;
use App\User;
use GuzzleHttp\Client;

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
         $getPost = Customer::orderBy('updated_at', 'DESC')->paginate(10);
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
        $input = request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:customers,email',
            'phone'=> 'required',
            'dateofbirth'=> 'required',
            'company'=> 'required'
         ]); 
         //generate track ID
         do {
            $token = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 8);  //mt_rand(100000, 999999);
        } while (Customer::where('track_id', $token)->exists());
    
      $savePost = new Customer;
      $savePost->name = request('name');
      $savePost->email = request('email');
      $savePost->phone = request('phone');
      $savePost->dateofbirth = request('dateofbirth');
      $savePost->company = request('company');
     
    
      //Send sms
    $username = "tochukwuodeme@gmail.com";
    $apikey = "477dd6cbd5d8171d6141956016dcb846a392ba59";
    $sender = "JET SERVICE";
    $messagetextHead = 'Hi '.ucfirst($savePost->name).",";
    $messagetextbody = 'Jet Service has added you into our customer database. You can track your goods with your ID on our website';
    $messagetextFooter = 'Your fastest partner';
    $recipients = $savePost->phone;
    //$codemsg = 'Your new ID is: ';
    $getcode ='Your new ID is: '. $token;

    $client = new Client();
    $res = $client->get("http://api.ebulksms.com:8080/sendsms?username=".$username."&apikey=".$apikey."&sender=".$sender."&messagetext=".$messagetextHead."%0a%0a".$messagetextbody."%0a%0a".$getcode."%0a%0a".$messagetextFooter."!&flash=0&recipients=".$recipients);
    if($res){
        $savePost->status = TRUE;
        $savePost->track_id = $token;
    }
    $savePost->save();
    return back()->with('success', 'Registration Complete and Sms sent!');

    }

    public function edit($id){
        $editPost = Customer::findOrFail($id);
        return view('admin.editcustomer', compact('editPost'));
    }
  
    public function update(Request $request, $id){

        $input = request()->validate([
            'name'=> 'required|min:6',
            'email'=> 'required|email|unique:customers,email,'.$id,
            'phone'=> 'required',
            'dateofbirth'=> 'required',
            'company'=> 'required'
        ]); 


        $updatePost =  Customer::findOrFail($id);
        $updatePost->name = request('name');
        $updatePost->email = request('email');
        $updatePost->phone = request('phone');
        $updatePost->dateofbirth = request('dateofbirth');
        $updatePost->company = request('company');
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

    public function users()
    {
        $getAdmin = User::all();
        return view('admin.user', compact('getAdmin'));
    }

    public function adminedit($id){
        $editPost = User::findOrFail($id);
        return view('admin.user-edit', compact('editPost'));
    }

    public function adminupdate(Request $request, $id){

        $input = request()->validate([
            'name'=> 'required|min:6',
            'email'=> 'required|email|unique:users,email,'.$id,
            'status'=> 'required'
        ]); 


        $updatePost =  User::findOrFail($id);
        $updatePost->name = $request->input('name');
        $updatePost->email = $request->input('email');
        $updatePost->status = $request->input('status');
        $updatePost->save();
    
        return redirect('users')->with('editmessage', 'Details Updated!');
    
    }

    public function admindelete(Request $request, $id){
        $deletePost =  User::findOrFail($id);
        $deletePost->delete();
    
        return back()->with('deletemessage','Customer deleted!');
    
    }
}
