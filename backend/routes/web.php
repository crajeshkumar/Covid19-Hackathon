<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Student;

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
Route::get('/formsuccess',function(){
    return ["form"=>'submitted'];
});
Route::get('/ping', function () {
    return view('welcome');
});
Route::get('/form', 'formController@create');

Route::post('/form', 'formController@store');
Route::get('/student', function(){
    return Student::all();
});

Route::get('/student/{id}', function($id){
    return view('details',array('id'=>$id));
});

Route::post('/student', function(){
    return Request::all();

    $student = new Student;

    $student->name = 'Yogi';
    $student->save();

    return array(
        'success'=>true
    );
});
Route::resource('communication','PageController');
