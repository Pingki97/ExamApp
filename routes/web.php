 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Exam;
use App\Http\Livewire\admin\Index;
use App\Http\Livewire\admin\Classroom;
use App\Http\Livewire\{
    User,
    Login,
    Register
};


// user side -------------------
Route::get('/',Login::class)->name('login');
Route::get('/register',Register::class)->name('register');


// admin side -------------------
Route::get('/exadmin',Index::class);
Route::get('/exam',Exam::class);
Route::get('/class',Classroom::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
