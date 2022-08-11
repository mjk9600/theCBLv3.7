<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Middleware\AuthCheck;
use App\Http\Controllers\playerController; 
use App\Http\Controllers\tournamentController;
use App\Mail\ResetPassword;
use App\Http\Controllers\GoogleController;

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

require __DIR__.'/auth.php';






Auth::routes(['verify' => true]);

// Route::group(['middleware' => ['auth', 'verified']], function() {
// 	Route::get('/dashboard', [CustomAuthController::class,'dashboard']);
// });


Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/news', function () {
    return view('news');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/teamReg', function () {
    return view('user.teamReg');
});
// Route::get('/tournament', function () {
//     return view('user.tournamentRegister');
// });
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


*/

//Route::get('account/verify/{token}', [CustomAuthController::class, 'verifyAccount'])->name('user.verify');
Route::get('/register', [CustomAuthController::class,'register']);
Route::post('/register', [CustomAuthController::class,'registerUser'])->name('register');
Route::get('/loginPage', [CustomAuthController::class,'login'])->name('login');
//Route::get('loginPage/{token}', [CustomAuthController::class, 'verifyAccount']);
Route::post('/loginPage', [CustomAuthController::class,'loginUser'])->name('login');
Route::get('/signOut', [CustomAuthController::class,'signOut'])->name('signOut');
Route::get('forgot', [CustomAuthController::class, 'forgotPassword'])->name('forgot');
Route::get('forgot/{token}', [CustomAuthController::class, 'forgotPasswordValidate']);
Route::post('forgot', [CustomAuthController::class, 'resetPassword'])->name('forgot');
Route::put('reset-password', [CustomAuthController::class, 'updatePassword'])->name('reset-password');
Route::get('/dashboard', [CustomAuthController::class,'dashboard']);
Route::get('/chooseYourReg', [CustomAuthController::class,'chooseYourReg']);


Route::get('/player', [playerController::class,'player']);
Route::post('/player', [playerController::class,'playerUser'])->name('player');

Route::get('/playerInfo', function () {
    return view('user.playerInfo');
});
Route::get('/playerUpdate', function () {
    return view('user.playerUpdate');
});


Route::get('/tournament', [tournamentController::class,'tournament']);
Route::post('/tournament', [tournamentController::class,'tournamentUser'])->name('tournament');

Route::get('/tournamentInfo', function () {
    return view('user.tournamentInfo');
});
Route::get('/tournamentUpdate', function () {
    return view('user.tournamentUpdate');
});




// login with google
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
    
});

//Admin Score Panel
Route::get('/admin', function () {
    return view('admin.adminDashboard');
});


// Route::post('/profile', [CustomAuthController::class,'profile']);
Route::view('profile','user.profile');

//mail verification
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']); 
Route::get('loginPage/{token}', [CustomAuthController::class, 'verifyAccount'])->name('user.verify');