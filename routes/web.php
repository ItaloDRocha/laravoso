<?php

use App\Http\Controllers\Form\ResourceController;
use App\Http\Controllers\Form\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', ResourceController::class) ->names('user')->parameters(['usuarios' => 'user']);

// Route::get('usuarios', [TestController::class,'listAllUsers'])->name('users.listAll');

// Route::get('usuarios/novo', [TestController::class, 'formAddUser']) ->name('users.formAddUser');

// Route::get('usuarios/editar/{user}', [TestController::class, 'formEditUser']) ->name('users.formEditUser');

// Route::get('usuarios/{user}', [TestController::class, 'listUser']) ->name('users.list');

// Route::post('usarios/store', [TestController::class, 'storeUser'])->name('users.store');

// Route::put('usuarios/edit/{user}', [TestController::class, 'edit'])->name('users.edit');

// Route::delete('usuarios/destroy/{user}', [TestController::class, 'destroy'])->name('users.destroy');

