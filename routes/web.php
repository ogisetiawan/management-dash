<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MasterData\CountryController;
use App\Http\Controllers\Admin\MasterData\CompanyController;
use App\Http\Controllers\Admin\MasterData\DepartmentController;
use App\Http\Controllers\Admin\MasterData\DivisionController;
use App\Http\Controllers\Admin\UserManagement\UsersController;
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

// @ ARTISAN ROUTE
Route::get('optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Clear Route cache:
Route::get('route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
// clear-cache
Route::get('cache-clear', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Clear View cache:
Route::get('view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Config cache cleared</h1>';
});

//@ authManually
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::post('/validate', [LoginController::class, 'validateLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/password/reset', [LoginController::class, 'showResetForm']);
Route::get('/password/new', [LoginController::class, 'showNewPasswordForm']);
Route::get('/password/mail', [LoginController::class, 'showMailForm']);

//@ admin
Route::get('admin/master_data/country/get', [CountryController::class, 'create']);
Route::get('admin/master_data/country', [CountryController::class, 'index']);

Route::get('admin/master_data/company/get', [CompanyController::class, 'create']);
Route::get('admin/master_data/company', [CompanyController::class, 'index']);

Route::get('admin/master_data/division/get', [DivisionController::class, 'create']);
Route::get('admin/master_data/division', [DivisionController::class, 'index']);

Route::get('admin/master_data/department/get', [DepartmentController::class, 'create']);
Route::get('admin/master_data/department', [DepartmentController::class, 'index']);

Route::get('admin/user_management/users/get', [UsersController::class, 'create']);
Route::resource('admin/user_management/users', UsersController::class);
