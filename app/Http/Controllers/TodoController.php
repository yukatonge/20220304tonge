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
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $items = Todo::find($request->id);
        return view('delete', ['form' =>$items]);
    }
    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
