<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use GuzzleHttp\Client;
class customerController extends Controller
{
    public function index(){
        return view('shipwithus');
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
  return back()->with('message', 'Registration Complete!');

}

   


    

}
