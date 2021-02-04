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
Route::get('/artikel', [ProfileAdmin::class, 'allart']);
Route::get('/artikel/pag', [ProfileAdmin::class, 'onart']);
Route::get('/about', [ProfileAdmin::class, 'indfer2']);
Route::get('/services', [ProfileAdmin::class, 'indfer3']);
Route::get('/portfolio', [ProfileAdmin::class, 'indfer4']);
Route::get('/contak',[ProfileAdmin::class, 'indfer5']);




Route::group(['middleware' => ['auth']], function () {
Route::get('/admin/setting', [ProfileAdmin::class, 'adminSetting']);
Route::get('/admin/developer', [ProfileAdmin::class, 'adminDev']);
Route::get('/admin/cp', [ProfileAdmin::class, 'adminCPs']);
Route::get('/admin/project', [ProfileAdmin::class, 'adminproject']);
Route::get('/admin/te', [ProfileAdmin::class, 'adminFilemanager']);
Route::get('/admin/like', [ProfileAdmin::class, 'linkn']);
Route::get('/admin/pas', [ProfileAdmin::class, 'pas']);
Route::get('/admin/testimonies', [ProfileAdmin::class, 'Testimony']);
Route::get('/admin/servides', [ProfileAdmin::class, 'servide']);
Route::get('/admin/q_a_s', [ProfileAdmin::class, 'q_a_s']);
Route::get('/admin/menu', [ProfileAdmin::class, 'menu']);
Route::get('/admin/cat_project', [ProfileAdmin::class, 'cat_project']);
Route::get('/admin/cat_artikels', [ProfileAdmin::class, 'cat_artikels']);
Route::get('/admin/cliens', [ProfileAdmin::class, 'cliens']);
Route::get('/admin/artikels', [ProfileAdmin::class, 'artikels']);
Route::get('/admin/del', [ProfileAdmin::class, 'del']);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::post('/admin/pas', [ProfileAdmin::class, 'pas']);
Route::post('/admin/add', [ProfileAdmin::class, 'add']);
});




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

// fORNED
Route::get('/frontend/dashboard', function () {
    return view('FORNED.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
