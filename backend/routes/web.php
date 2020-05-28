<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Student;
use App\Car;
use App\Hospital;
use App\Pass;
use App\Product;
use Razorpay\Api\Api;
use App\Doctor;
use App\Volunteer;
use App\Appointment;
use App\Task;
use App\Statistic;
use App\TaskAssignment;
use App\Tracker;
use App\FoodSupply;
use App\ReliefMaterial;

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

Route::get('/product', function(){
    return Product::all();
});

Route::get('/payment/{amount}', function($amount){

    $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
    $order = $api->order->create(array(
        'receipt' => '123',
        'amount' => $amount,
        'currency' => 'INR'
        )
      );
      return $order['id'];
});

Route::get('/admin/pass', function(){
    return Pass::all();
});

Route::post('/admin/pass/{id}/approve', function($id){
    $pass = Pass::find($id);
    $pass->status = 'approved';
    $pass->save();
});

Route::post('/admin/pass/{id}/reject', function($id){
    $pass = Pass::find($id);
    $pass->status = 'rejected';
    $pass->save();
});

Route::get('/pass/{id}/status', function($id){
    $pass = Pass::find($id);
    return $pass->status;
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
    $pass->hash = '0';
    $pass->to = $input['to'];

    $pass->status = 'pending';

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

Route::get('/doctor', function(){
    return Doctor::all();
});

Route::get('/appointment', function(){
    return Appointment::all();
});

Route::post('/appointment', function(){
    $input = Request::all();

    $appointment = new Appointment;

    $appointment->doctor = $input['doctor'];
    $appointment->timeslot = $input['timeslot'];
    $appointment->date = $input['date'];
    $appointment->patient = $input['patient'];

    $appointment->save();
});

Route::post('/volunteer', function(){
    $input = Request::all();

    $volunteer = new Volunteer;

    $volunteer->name = $input['name'];
    $volunteer->aadhar = $input['aadhar'];

    $volunteer->save();

    return $volunteer->id;
});

Route::get('/volunteer', function(){
    return Volunteer::all();
});

Route::get('/task', function(){
    return Task::all();
});

Route::post('/task', function(){
    $input = Request::all();

    $task = new Task;

    $task->title = $input['title'];
    $task->description = $input['description'];
    $task->city = $input['city'];
    $task->date = $input['date'];
    $task->contact = $input['contact'];

    $task->save();

    return $task->id;
});

Route::post('/volunteer/{id}/{task}', function($id, $task){
    $taskAssignment = new TaskAssignment;

    $taskAssignment->volunteer = $id;
    $taskAssignment->task = $task;

    $taskAssignment->save();
});

Route::get('/taskAssignment', function(){
    return TaskAssignment::all();
});

Route::get('/statistic', function(){
    return Statistic::all();
});

Route::get('/tracker', function(){
    return Tracker::all();
});

Route::post('/tracker', function(){
    $input = Request::all();

    $tracker = new Tracker;

    $tracker->latitude = $input['latitude'];
    $tracker->longitude = $input['longitude'];

    $tracker->save();

    return $tracker->id;
});

Route::post('/tracker/{id}', function($id){
    $input = Request::all();

    $tracker = Tracker::find($id);
    
    $tracker->latitude = $input['latitude'];
    $tracker->longitude = $input['longitude'];

    $tracker->save();
});

Route::delete('/tracker/{id}', function($id){
    Tracker::destroy($id);
});

Route::get('/food', function(){
    return FoodSupply::all();
});

Route::post('/food', function(){
    $input = Request::all();

    $tracker = new FoodSupply;
    
    $tracker->latitude = $input['latitude'];
    $tracker->longitude = $input['longitude'];

    $tracker->save();
});

Route::get('/relief', function(){
    return ReliefMaterial::all();
});

Route::post('/relief', function(){
    $input = Request::all();

    $tracker = new ReliefMaterial;
    
    $tracker->name = $input['name'];
    $tracker->description = $input['description'];
    $tracker->latitude = $input['latitude'];
    $tracker->longitude = $input['longitude'];

    $tracker->save();
});