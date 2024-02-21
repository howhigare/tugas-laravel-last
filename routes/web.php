<?php

use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsCotroller;
use App\Http\Controllers\HomeAfterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Extracurricular;
use App\Models\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardStudentController;

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
    return view('welcome', [
        "tittle" => 'welcome'
    ]);
});

// Route::get('/hello', function () {
//     return 'Hello, World!';
// });
// Route::get('/student', function () {
//     return 'ayla hehehhe';
// });

Route::get('/about', function () {
    return view('about', [
        "tittle" =>'about',
        "nama" => "Ayla Syafa Syahira",
        "kelas" => "11 PPLG 1",
        "foto" => "foto.jpg"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "tittle" => 'home'
    ]);
});


Route:: get ('/student/all', [StudentsCotroller::class, 'index1']);
Route::get('/student/detail/{student}',[StudentsCotroller::class, 'show']);
Route::get('/student/create',[StudentsCotroller::class,'create'])-> middleware('auth');
Route::delete('/student/delete/{student}', [StudentsCotroller::class, 'destroy']) -> middleware('auth');
Route::post('/student/add',[StudentsCotroller::class,'store']) -> middleware('auth');
Route::get('/student/edit/{student}', [StudentsCotroller::class, 'edit']) -> middleware('auth');
Route::post('/student/update/{student}', [StudentsCotroller::class, 'update']) -> middleware('auth');





Route:: get('/extracurricular', [ExtracurricularController::class, 'index2']);

Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit/{classes}', [KelasController::class, 'edit']);
Route:: post('/kelas/submit/{classes}', [KelasController::class, 'update']);
Route::delete('/kelas/delete/{classes}',[KelasController::class, 'destroy']);
Route::get('/kelas', [KelasController::class, 'index3']);

// Route::get('/login', function () {
//     return view('login/index');
// })-> name("login");
// // Route::get('/register', function () {
// //     return view('signup/index');
// // });
// // Route::post('/register',[RegisterController::class, 'store']);
// Route::get('/signup', [RegisterController::class, "signupV"])-> name("signup");
// Route::post('/signup', [RegisterController::class, 'signupR'])->name('signupR');


Route::get('/login', [LoginController::class,'index'])-> middleware('guest') -> name('login');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/register', [RegisterController::class,'index'])-> middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');

Route::get('/homeafter',[HomeAfterController::class,'index']);
// Route::get('/home',[HomeController::class,'index']);
// Route::get('/admindashboard',[AdminController::class,'index']);
Route::get('/dashboard/index', [DashboardController::class, 'index'])-> middleware('auth');

//routing untuk dashboard student
Route:: get ('/dashboard/student/all', [DashboardStudentController::class, 'index1']);
Route::get('/dashboard/student/detail/{student}',[DashboardStudentController::class, 'show']);
Route::get('/dashboard/student/create',[DashboardStudentController::class,'create'])-> middleware('auth');
Route::delete('/dashboard//student/delete/{student}', [DashboardStudentController::class, 'destroy']) -> middleware('auth');
Route::post('/dashboard/student/add',[DashboardStudentController::class,'store']) -> middleware('auth');
Route::get('/dashboard/student/edit/{student}', [DashboardStudentController::class, 'edit']) -> middleware('auth');
Route::post('/dashboard/student/update/{student}', [DashboardStudentController::class, 'update']) -> middleware('auth');

//routing untuk dashboard kelas
Route::get('/dashboard/kelas/create', [DashboardKelasController::class, 'create'])->name('dashboard.kelas.create');
Route::post('/dashboard/kelas/store', [DashboardKelasController::class, 'store'])->name('dashboard.kelas.store');
Route::get('/dashboard/kelas/edit/{classes}', [DashboardKelasController::class, 'edit']);
Route:: post('/dashboard/kelas/submit/{classes}', [DashboardKelasController::class, 'update']);
Route::delete('/dashboard/kelas/delete/{classes}',[DashboardKelasController::class, 'destroy']);
Route::get('/dashboard/kelas/all', [DashboardKelasController::class, 'index']);

