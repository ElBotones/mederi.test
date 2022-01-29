<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionsController;

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
})->name('welcome');

Route::get('home', function () {
    $nombre =  'Alberto';
    $posts = ["Posts1","Posts2","Posts3","Posts4","Posts5"];
    // return view('home')->with('nombre',$nombre);
    return view('home', ['nombre' => $nombre, 'apellido' => 'Mujica', 'posts' => $posts]);
})->name('home');

Route::resource('admin/subscriptions', SubscriptionsController::class);
Route::get('agenda', function () {
    return view('securezone.agenda');
})->name('agenda');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
