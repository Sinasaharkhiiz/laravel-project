<?php
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Course;

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
    return view('home');
});
Route::get('/courses', function () {
    $c_data = Course::all();
    return view('courses', ['c_data'=> $c_data]);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/regiister', function () {
    return view('regiister');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return view('home');
})->name('logout');

Route::get('/add_course', function () {
    return view('add_course');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/add_course',[CoursController::class, 'add_course']);
});

require __DIR__.'/auth.php';
