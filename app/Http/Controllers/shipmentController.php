<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;

class shipmentController extends Controller
{
    public function index(){
        $shipPost = Shipment::all();
        // $shipPost -> Shipment::setTable('Shipment')->latest('shipmentdate')->first();        
        $getPost = Customer::all();
        $allcustomer = Customer::get()->count();
        return view('admin.index', compact('getPost', 'allcustomer', 'shipPost'));
    }

    public function update(Request $request){
        $savePost = new Shipment;
        $savePost->shipmentdate = $request->input('shipmentdate');
        $savePost->save();

        return back();
    }
}
