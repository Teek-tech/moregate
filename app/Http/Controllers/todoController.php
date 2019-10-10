<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class todoController extends Controller
{
    public function index(){
        $getPost = todo::all();
        return view('todo', compact('getPost'));
    }

    public function store(Request $request){
      $savePost = new Todo;
      $savePost->description = $request->input('description');
      $savePost->body = $request->input('body');
      //dd($savePost->body); 
      $savePost->save();
      return back();

    }
     
    public function edit($id){
      $editPost = Todo::findOrFail($id);
      return view('todo-edit', compact('editPost'));
    }

    public function update(Request $request, $id){
        $updatePost =  Todo::findOrFail($id);
        $updatePost->description = $request->input('description');
        $updatePost->body = $request->input('body');
        $updatePost->save();
  
        return redirect('todo');
  
      }
}
