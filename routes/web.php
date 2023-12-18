<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/', [AuthController::class, 'index'])->name('login');

        Route::post('/', [AuthController::class, 'login']);

        
});

Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/logout',[HomeController::class,'logout'])->name('logout');

        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::get('/forgetpass', [HomeController::class, 'forgetpass'])->name('forgetpass');

        Route::get('/recoverpass', [HomeController::class, 'recoverpass'])->name('recoverpass');

        Route::post('/recoverpass', [HomeController::class, 'recoverpass'])->name('recoverpass');

        Route::get('/registration', [HomeController::class, 'registration'])->name('registration');

        Route::post('/registration', [HomeController::class, 'regins'])->name('registration');

        Route::get('/userregistration', [HomeController::class,'userregistration'])->name('registration');

        Route::post('userregistration', [HomeController::class,'userregins'])->name('registration');

       
});

// require __DIR__.'/auth.php';
