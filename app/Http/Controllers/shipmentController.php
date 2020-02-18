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

    public function arrival(Request $request){
        $shipPost = Shipment::orderBy('updated_at', 'DESC')->get();
        $search = $request->input('search');
        if(!empty($search)){
            $getSearch = Shipment::where('category', $search)->get();
            if(count($getSearch) > 0){
                return view('shipments', compact('shipPost','getSearch','search'))->withDetails($getSearch);
            }
        }
        return view('shipments', compact('shipPost','search'));
    }

    public function adminshipment(){
        $shipPost = Shipment::orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.adminshipment', compact('shipPost'));
    }

    public function insert(Request $request){

        
        $input = request()->validate([
            'category'=> 'required',
            'cargo_name'=> 'required',
            'pdate'=> 'required',
            'shipmentdate'=> 'required',
        ]); 

        $savePost = new Shipment;
        $savePost->category = request('category');
        $savePost->cargo_name = request('cargo_name');
        $savePost->pdate = request('pdate');
        $savePost->shipmentdate = request('shipmentdate');
        $savePost->save();


        return back()->with('message', 'Shipment date added!');
    }

    public function edit($id){
        $editPost = Shipment::FindOrFail($id);
        return view('admin.adminshipment_edit', compact('editPost'));
    }

    public function update(Request $request, $id){

        $input = request()->validate([
            'category'=> 'required',
            'cargo_name'=> 'required',
            'pdate'=> 'required',
            'shipmentdate'=> 'required',
        ]); 


        $updatePost =  Shipment::findOrFail($id);
        $updatePost->category = request('category');
        $updatePost->cargo_name = request('cargo_name');
        $updatePost->pdate = request('pdate');
        $updatePost->shipmentdate = request('shipmentdate');
        $updatePost->save();
    
        return redirect('shipmentadmin')->with('editmessage', 'Details Updated!');
    
    }

    public function delete(Request $request, $id){
        $deletePost =  Shipment::findOrFail($id);
        $deletePost->delete();
    
        return back()->with('deletemessage', 'Shipment date deleted!');
    
    }

    public function search(){
       
    }
}
