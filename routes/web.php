<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Website\HomeController as WebsiteHomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', [WebsiteHomeController::class, 'index'])->name('website.home');

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('admin.home');
    Route::get('home', [HomeController::class, 'index'])->middleware(['auth'])->name('admin.home');
});

require __DIR__.'/auth.php';


