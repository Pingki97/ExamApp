<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
class Login extends Component
{
    public $authenticationErr='';
    public $email;
    public $password;
    // public function call_register()
    // {
    //     $this->emit('register');
    // }
    public function submit()
    {
        $this->validate([
            'email'    => 'required|email|min:3|max:50',
            'password'  => 'required|string|min:3|max:50',
        ]);
        $student=Student::where('stu_email',$this->email) ->get();
        // dd($student[0]->stu_password);
        if( Hash::check($this->password,$student[0]->stu_password)){
            session()->put("stu_email",$student[0]->stu_email);
            session()->put("stu_name",$student[0]->stu_name);
            session()->put("stu_id",$student[0]->id);
        
            redirect(route('home'));
        }else {
            $this->authenticationErr="Email or password not match";
        }
    }

    public function render()
    {
        return view('livewire.login')->layoutData(['title' => 'Login']);
    }
}
