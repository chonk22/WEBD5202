<?php

use Illuminate\Support\Facades\Route;
use App\models\Task;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\PostsController;

Route::get('/', [TasksController::class, 'index']);

Route::get('/tasks',[TasksController::class, 'welcome']);
Route::get('/create',[TasksController::class, 'create']);
Route::get('/tasks/{task}',[TasksController::class, 'show']);





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/tasks', function () {
//     $tasks = DB::table('tasks')->latest()->get();

//     $tasks = App\models\Task::all();

//     return view('index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {

//     //$task = DB::table('tasks')->find($id);

//     $task = Task::find($id);



//     return view('show', compact('task'));
// });
