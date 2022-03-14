<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
      $items = Todo::all();
      return view('index', ['items' => $items]);
    } 
    public function create(Request $request) 
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form ['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }  

}
