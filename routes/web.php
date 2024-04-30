<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);

//GET /tasks - Index: Displays a listing of tasks. Associated controller method: index().
//GET /tasks/create - Create: Shows the form for creating a new task. Associated controller method: create().
//POST /tasks - Store: Stores a newly created task in the database. Associated controller method: store().
//GET /tasks/{task} - Show: Displays the specified task. Associated controller method: show($id).
//GET /tasks/{task}/edit - Edit: Shows the form for editing a task. Associated controller method: edit($id).
//PUT/PATCH /tasks/{task} - Update: Updates the specified task in the database. Associated controller method: update($id).
//DELETE /tasks/{task} - Destroy: Removes the specified task from the database. Associated controller method: destroy($id).
