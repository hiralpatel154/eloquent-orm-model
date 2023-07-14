<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('crud/read');
});

// Route::get('/add', function () {
//     return view('crud/add');
// });
Route::view('/add','crud/add');
Route::post('add',[EmployeeController::class,'addEmployee']);
Route::get('read',[EmployeeController::class,'employeeList']);
Route::get('/',[EmployeeController::class,'employeeList']);

Route::get('edit/{id}',[EmployeeController::class,'editList']);
Route::post('update',[EmployeeController::class,'updateList']);

Route::get('delete/{id}',[EmployeeController::class,'deleteEmployee']);

