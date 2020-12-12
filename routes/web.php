<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::get('/hello', function () {
    return '<h1>HELLO WORLD!</h1>';
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' . $name . ' with an id ' . $id . '.';
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/there', function(){
//     return 'REDIRECTED';
// });

// Route::post('/verify', function(){
//     return 'Token is verified';

// });
// //->middleware('sample');

// Route::view('/welcome', 'welcome', ['name' => 'John Lee']);

// Route::get('/foo/{foo}/bar/{bar}', function($foo, $bar) {
//     return "Hi, ".$foo." and ".$bar."!";
// });

// Route::get('/name/{name?}', function($name = null) {
//     if($name == null) {
//         return "NULL VALUE";
//     } else {
//         return "Name Exists ".$name;
//     }
//  });

// Route::get('/user/{id}', function(Request $request, $id) {
//     return 'User '.$id;
// })->name('user');

// Route::redirect('/here', '/there');

// Route::get('/hello', function(){
//     return 'hello world'
// })