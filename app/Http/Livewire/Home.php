<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Home extends Component
{   
    // public $login =true;
    // public $register ;
    // public $user ;
    // protected $listeners = [
    //     'register',
    //     'login',
    //     'user'
    // ];
    // public function register()
    // {
    //     $this->login = false;
    //     $this->user = false;
        
    //     $this->register=true;
    // }
    // public function user()
    // {
    //     $this->login=false;
    //     $this->register=false;

    //     $this->user=true;
    //     // dd("register");
    // }
    // public function login()
    // {
    //     $this->user = false;
    //     $this->register=false;
        
    //     $this->login = true;
        
    // }

    public function render()
    {

        $exam_seduler = DB::table('exams')->where("class_id",session()->get('class_id'))->get();

        return view('livewire.home',["exam_seduler"=>$exam_seduler])->layoutData(['title' => 'Home']);

    }
}
