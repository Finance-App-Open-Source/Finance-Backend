<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = task::all();
        return $tasks;
    }
    public function create(Request $request){
        $task = Task::create($request->all());
        return $task;
    }
    public function read($id){
        $task = Task::find($id);
        return $task;
    }
    public function update($id,Request $request){
        $task = $this->read($id);
        $task->fill($request->all())->save();
        return $task;
    }
    public function delete($id){
        $task = $this->read($id);
        $task->delete();
        return $task;
    }
}
