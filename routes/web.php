<?php

use App\Http\Controllers\ProfileAdmin;
use Illuminate\Support\Facades\Route;

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

// Route::('/','Controller');



// byagus
Route::get('/pos', [ProfileAdmin::class, 'data']);
Route::get('/', [ProfileAdmin::class, 'indfer']);
Route::get('/admin/setting', [ProfileAdmin::class, 'adminSetting']);
Route::get('/admin/developer', [ProfileAdmin::class, 'adminDev']);
Route::get('/admin/cp', [ProfileAdmin::class, 'adminCPs']);
Route::get('/admin/project', [ProfileAdmin::class, 'adminproject']);
Route::get('/admin/te', [ProfileAdmin::class, 'adminFilemanager']);
Route::get('/admin/pas', [ProfileAdmin::class, 'pas']);
Route::get('/admin/testimonies', [ProfileAdmin::class, 'Testimony']);

Route::post('/admin/pas', [ProfileAdmin::class, 'pas']);
Route::post('/admin/add', [ProfileAdmin::class, 'add']);



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// test frontend
Route::get('/frontend', function () {
    return view('admin.testimoni');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
