<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;

class shipmentController extends Controller
{
    public function index(){
        $shipPost = Shipment::all();
        $allshipment = Shipment::get()->count();
        // $shipPost -> Shipment::setTable('Shipment')->latest('shipmentdate')->first();        
        $getPost = Customer::all();
        $allcustomer = Customer::get()->count();
        return view('admin.index', compact('getPost', 'allcustomer', 'shipPost', 'allshipment'));
    }

    public function arrival(){
        $shipPost = Shipment::all();
        // $shipPost -> Shipment::setTable('Shipment')->latest('shipmentdate')->first();        
        $getPost = Customer::all();
        // $allcustomer = Customer::get()->count();
        return view('shipments', compact('getPost', 'shipPost'));
    }

    public function adminshipment(){
        $shipPost = Shipment::all();
        return view('admin.adminshipment', compact('shipPost'));
    }

    public function insert(Request $request){

        
        $input = request()->validate([
            'name'=> 'required',
            'pmonth'=> 'required',
            'pdate'=> 'required',
            'shipmentdate'=> 'required',
        ]); 

        $savePost = new Shipment;
        $savePost->name = $request->input('name');
        $savePost->pmonth = $request->input('pmonth');
        $savePost->pdate = $request->input('pdate');
        $savePost->shipmentdate = $request->input('shipmentdate');
        $savePost->save();


        return back()->with('message', 'Shipment date added!');
    }

    public function edit($id){
        $editPost = Shipment::FindOrFail($id);
        return view('admin.adminshipment_edit', compact('editPost'));
    }

    public function update(Request $request, $id){

        $input = request()->validate([
            'name'=> 'required',
            'pmonth'=> 'required',
            'pdate'=> 'required',
            'shipmentdate'=> 'required',
        ]); 


        $updatePost =  Shipment::findOrFail($id);
        $updatePost->name = $request->input('name');
        $updatePost->pmonth = $request->input('pmonth');
        $updatePost->pdate = $request->input('pdate');
        $updatePost->shipmentdate = $request->input('shipmentdate');
        $updatePost->save();
    
        return redirect('shipmentadmin')->with('editmessage', 'Details Updated!');
    
    }

    public function delete(Request $request, $id){
        $deletePost =  Shipment::findOrFail($id);
        $deletePost->delete();
    
        return back()->with('deletemessage', 'Shipment date deleted!');
    
    }
}
