<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\usrPostController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\usrtimesheetController;
use App\Http\Controllers\leaveController;
use App\Http\Controllers\ResignationController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\accountingController;
use App\Http\Controllers\usrLeaveController;
use App\Http\Controllers\usrResignationController;
use App\Http\Controllers\usrInventoryController;
use App\Http\Controllers\addNewController;
use App\Http\Controllers\usrAccountingController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChartJsController;

Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');
Route::resource('posts', PostController::class);
Route::resource('usrposts', usrPostController::class);
Route::resource('timesheet', TimesheetController::class);
Route::resource('usrtimesheet', usrtimesheetController::class);
Route::resource('leave', leaveController::class);
Route::resource('inventory', inventoryController::class);
Route::resource('resignation', ResignationController::class);
Route::resource('about', aboutController::class);
Route::resource('accounting', accountingController::class);
Route::resource('usrleave', usrLeaveController::class);
Route::resource('usrresignation', usrResignationController::class);
Route::resource('usrinventory', usrInventoryController::class);
Route::resource('usraccounting', usrAccountingController::class);
Route::resource('addnew', addNewController::class);

Route::get('/search', [timesheetController::class, 'search'])->name('search');
Route::get('/finding', [usrtimesheetController::class, 'finding'])->name('finding');
Route::get('/carikan', [inventoryController::class, 'carikan'])->name('carikan');
Route::get('/filter', [inventoryController::class, 'filter'])->name('filter');
Route::get('/pencarian', [usrInventoryController::class, 'pencarian'])->name('pencarian');
Route::get('/carinama', [ResignationController::class, 'carinama'])->name('carinama');
Route::get('/pencariancarinama', [usrResignationController::class, 'pencariancarinama'])->name('pencariancarinama');
Route::get('/cari_data', [accountingController::class, 'cari_data'])->name('cari_data');
Route::get('/cari_data_filter', [usrAccountingController::class, 'cari_data_filter'])->name('cari_data_filter');


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

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [PostController::class, 'create'])->name('posts.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [accountingController::class, 'create'])->name('accounting.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [TimesheetController::class, 'create'])->name('timesheet.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('history', [leaveController::class, 'history'])->name('leave.history');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [leaveController::class, 'create'])->name('create.history');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [ResignationController::class, 'create'])->name('resignation.create');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create', [inventoryController::class, 'create'])->name('inventory.create');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');


    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture', [AdminController::class, 'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('adminChangePassword');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});
/*
Route::group(['prefix' => 'accounting', 'middleware' => ['isAccounting', 'auth', 'PreventBackHistory']], function () {
    Route::get('accounting', [accountingController::class, 'index'])->name('accounting.index');
});*/
