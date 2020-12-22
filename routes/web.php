<?php

use App\Models\Tranjection;
use App\Http\Controllers\Refer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskdoneContorller;
use App\Http\Controllers\UsertaskController;
use App\Http\Controllers\WithdrowController;
use App\Http\Controllers\TranjectionController;
use App\Http\Controllers\UserwithdrowController;
use App\Http\Controllers\AccountactiveController;

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
    Route::delete('/userdelete/{$user}',[ UserController::class, 'delete'])->name('user.delete');;
    Route::get('/users/inactive', [UserController::class, 'another'])->name('user.another');
    // Route::get('/user/inactive', [UserController::class, 'inactive'])->name('user.inactive');
    Route::resource('/withdrow', WithdrowController::class );
    Route::resource('/notice', NoticeController::class );
    Route::post('/withdrow/{id}', [WithdrowController::class, 'success'])->name('withdrow.success');
    Route::post('/withdrow/reject/{id}', [WithdrowController::class, 'reject'])->name('withdrow.reject');
    Route::get('activeidreq', [TranjectionController::class, 'getdata'])->name('req.user');
    Route::get('accountactive/{user}', [AccountactiveController::class, 'index'])->name('mail.sent');
    Route::get('massage', [ContactController::class, 'massage'])->name('contact.massage');
    Route::delete('massagedlet/{id}', [ContactController::class, 'destroy'])->name('massage.destroy');
    Route::get('massage/{id}', [ContactController::class, 'view'])->name('massage.view');

    // Route::resource('/profile', ProfileController::class );
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/task', [TaskController::class, 'view'])->name('task.view');
    Route::post('/task/{task}/complet', [TaskdoneContorller::class, 'store'])->name('taskdone.store');
    Route::get('withdrow', [UserwithdrowController::class, 'index'])->name('withdrow');
    Route::post('withdrow/{user}', [UserwithdrowController::class, 'store'])->name('withdrow.store');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/{user}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('changepass', [ProfileController::class, 'storepass'])->name('pass');
    Route::get('active-id', [TranjectionController::class, 'index'])->name('tranjection');
    Route::post('active-id', [TranjectionController::class, 'create'])->name('tranjection.create');

});
Route::post('contact', [ContactController::class , 'send'])->name('contact.index');


