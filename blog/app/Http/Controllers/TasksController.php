<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TasksController extends Controller
{
    //
    public function index() {

        return view('tasks.index');
    }

    public function welcome() {

        $tasks = Task::all();

        return view('tasks.welcome', compact('tasks'));
    }

    public function create() {


        return view('tasks.create');
    }



    public function show(Task $task) {

        //$task = Task::find($task);

        return view('tasks.show', compact('task'));
    }
}
