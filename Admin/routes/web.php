<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\pollingStationController; 
use App\Http\Controllers\excelExportController;
use App\Http\Controllers\LoginController;

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
//     return view('home');
// });
//login

Route::get('/', function(){
    return view('auth.login');
});
Route::post('/login',[LoginController::class, 'login'])->name('user.login');
Route::get('/dashboard', [HomeDashboardController::class, 'index'])->name('home');
Route::get('/user_registration', [UserManagementController::class, 'create'])->name('register');
Route::post('/save', [UserManagementController::class, 'store'])->name('users.store');
Route::get('/manage Users', [UserManagementController::class, 'show'])->name('users.show');
Route::get('/Edit User/{id}', [UserManagementController::class, 'edit'])->name('users.edit');
Route::get('/Delete Users/{id}', [UserManagementController::class, 'destroy'])->name('users.destroy');

Route::get('/polling stations', [pollingStationController::class, 'create'])->name('pollingstation.create');
Route::post('/polling stations', [pollingStationController::class, 'store'])->name('pollingstation.store');
Route::get('/Manage polling stations data', [pollingStationController::class, 'index'])->name('pollingstation.index');
Route::get('/Edit polling station data/{id}', [pollingStationController::class, 'edit'])->name('pollingstation.edit');
Route::get('/Delete polling station/{id}', [pollingStationController::class, 'destroy'])->name('pollingstation.destroy');

//export route


Route::get('excel', [excelExportController::class,'export'])->name('export');

