<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test_database', function () {
    $newEmployee = new Employee();
    $newEmployee->save();
});

Route::get('/', function () {
    return view('home', ['name' => 'Alex', 'age' => 30, 'adress' => 'Serbia, Belgrade']);
});

Route::get('/contacts', function () {
    return view('contacts', ['name' => 'Alex', 'post_code' => 1234, 'email' => 'alex@gmail.com', 'phone' => '+79125267435']);
});