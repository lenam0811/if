<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;

class TaskController extends Controller
{
    public function index()
{ 
    $tasks = Task::all();
    return \view('task',compact('tasks'));
} 
public function create(){
    return \view('task-create'); 
}
public function store(Request $request){
    $task = new Task();
    $task->name= $request->name;
    $task->description=$request->description;
    $task->save();
    return \redirect(route('task.index'));
}
}