<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class shipmentController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function store(Request $request){
        $savePost = new  Shipment;
        $savePost->shipmentdate = $request->input('shipmentdate');
        $savePost->save();

        return back();
    }
}
