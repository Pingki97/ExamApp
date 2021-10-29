 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Exam;
use App\Http\Livewire\admin\Index;
use App\Http\Livewire\admin\Classroom;


//Route::get('/',User::class);
Route::get('/',Index::class);
Route::get('/exam',Exam::class);
Route::get('/class',Classroom::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
