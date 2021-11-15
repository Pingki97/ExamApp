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
    Route::get('/student/{exam_id}',StuExam::class)->name('stuexam');
    Route::get('/thankyou/{exam_id}',Thankyou::class)->name('thankyou');
});

// admin side -------------------
Route::get('/exadmin',Index::class);

Route::get('/class',Classroom::class);
// use Illuminate\Http\Request;
// Route::get('/s/{id}/{option}',function(Request $request){
//     $a=[$request->id,$request->option];
//     return $a;
// })->name('s');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
