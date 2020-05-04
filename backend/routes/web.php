<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Student;
use App\Car;
use App\Hospital;
use App\Pass;

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

Route::get('/', function(){
    return response()->file('../public/index.html');
});

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

Route::get('/hospital', function(){
    return Hospital::all();
});

Route::get('/pass/{id}', function($id){
    $pass = Pass::find($id);
    $pass->hash = md5(rand(0,255));
    $pass->save();
    return $pass->hash;
});

Route::post('/pass', function(){
    $input = Request::all();

    $pass = new Pass;
    
    $pass->name = $input['name'];
    $pass->reason = $input['reason'];
    $pass->aadhar = $input['aadhar'];
    $pass->from = $input['from'];
    $pass->to = $input['to'];

    $pass->save();

    return $pass->id;
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
