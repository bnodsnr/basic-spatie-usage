<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('authcheck', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
  Route::get('/',[DashboardController::class,'index'])->name('dashboard');
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  /*------------------------------------------------------------
    roles
  ------------------------------------------------------------------*/
  Route::get('roles', [RoleController::class, 'index']);
  Route::get('add-role', [RoleController::class, 'create'])->name('add-role');
  Route::post('save-roles', [RoleController::class, 'store'])->name('save-roles');
  Route::get('edit-role', [RoleController::class, 'edit'])->name('edit-role');
  Route::post('update-role/{id}', [RoleController::class, 'update'])->name('update-role');

  //permission controller
  Route::get('modules', [PermissionController::class,'index'])->name('modules');
  Route::get('add-modules', [PermissionController::class,'create'])->name('add-modules');
  Route::post('save-modules', [PermissionController::class,'store'])->name('save-modules');
  Route::get('edit-modules', [PermissionController::class,'edit'])->name('edit-modules');
  Route::post('update-modules/{id}', [PermissionController::class,'update'])->name('update-modules');
  Route::get('show-modules/{id}', [PermissionController::class,'show'])->name('show-modules');
  Route::post('assign-userpermission/{id}', [PermissionController::class,'createPermission'])->name('assign-userpermission');
  Route::get('revoke-permission/{userid}/{permission}', [PermissionController::class,'revokeUserPermission'])->name('revoke-permission');

 /*------------------------------------------------------------
    users 
  ---------------------------------------------------------*/
  Route::resource('users', UserController::class);
  Route::get('create',[UserController::class,'create']);
  Route::post('save-user',[UserController::class, 'store'])->name('save-user');
  Route::get('edit-user/{id}',[UserController::class,'edit'])->name('edit-user');
  Route::post('/update-user/{id}', [UserController::class,'update'])->name('update-user');
});
