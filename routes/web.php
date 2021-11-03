 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Exam;
use App\Http\Livewire\admin\Index;
use App\Http\Livewire\admin\Classroom;
use App\Http\Livewire\{
    Home,
    Login,
    Register,
    StuExam,
    Thankyou
};

// user side -------------------
Route::get('/',Login::class)->name('login');
Route::get('/register',Register::class)->name('register');

Route::group(['middleware'=> ['student']], function (){
    Route::get('/home',Home::class)->name('home');
    Route::get('/student/exam',StuExam::class)->name('stuexam');
    Route::get('/student/thankyou',Thankyou::class)->name('thankyou');
});

// admin side -------------------
Route::get('/exadmin',Index::class);

Route::get('/class',Classroom::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
