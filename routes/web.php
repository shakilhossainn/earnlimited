<?php

use App\Http\Controllers\Refer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TaskdoneContorller;
use App\Http\Controllers\UsertaskController;
use App\Http\Controllers\WithdrowController;
use App\Http\Controllers\UserwithdrowController;

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
    return view('website.index');
});




Route::get('dina', [AdminController::class, 'login'])->name('admin')->middleware('guest');
Route::post('dina', [AdminController::class, 'loginDashboard'])->name('admin.login');


Route::group(['prefix'=>'admin','middleware' => ['auth']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard.index');
    Route::resource('/task', TaskController::class);
    Route::resource('/user', UserController::class);
    Route::get('/user/inactive', [UserController::class,'inactive'])->name('user.shakil');
    Route::resource('/withdrow', WithdrowController::class );
    Route::resource('/notice', NoticeController::class );
    Route::post('/withdrow/{id}', [WithdrowController::class, 'success'])->name('withdrow.success');
    Route::post('/withdrow/reject/{id}', [WithdrowController::class, 'reject'])->name('withdrow.reject');
    // Route::resource('/profile', ProfileController::class );
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/task', [TaskController::class, 'view'])->name('task.view');
    Route::post('/task/{task}/complet', [TaskdoneContorller::class, 'store'])->name('taskdone.store');
    Route::get('withdrow', [UserwithdrowController::class, 'index'])->name('withdrow');
    Route::post('withdrow/{user}', [UserwithdrowController::class, 'store'])->name('withdrow.store');
});


