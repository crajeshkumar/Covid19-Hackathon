<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Student;
use App\Car;

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

Route::get('/ping', function () {
    return array(
        'success'=>true,
    );
});

Route::get('/car', function(){
    return Car::all(); // SELECT *
});

Route::get('/car/{id}', function($id){
    return Car::find($id);
});

Route::get('/student', function(){
    return Student::all();
});

Route::get('/student/{id}', function($id){
    return Student::find($id);
});

Route::post('/student', function(){
    $input = Request::all();

    $student = new Student; 

    $student->name = $input['name'];
    $student->save(); // INSERT INTO students 

    return array(
        'success'=>true
    );
});
