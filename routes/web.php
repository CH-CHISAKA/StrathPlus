<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashOrdersController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PickUpOrdersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['admin','auth'])->name('admin.')->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('index');
    Route::resource('/categories', CategoryController::class); 
    Route::resource('/menus', MenuController::class);
    Route::resource('/dash_orders', DashOrdersController::class);
    Route::resource('/pick_up_orders', PickUpOrdersController::class);
});

require __DIR__.'/auth.php';
