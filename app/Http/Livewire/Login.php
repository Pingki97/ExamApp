<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
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
    public function submit(Request $request)
    {
        $this->validate([
            'email'    => 'required|email|min:3|max:50',
            'password'  => 'required|string|min:3|max:50',
        ]);
        $student=Student::where('stu_email',$this->email)->first();
        // dd($student);
        if($student){
            if( Hash::check($this->password,$student["stu_password"])){
                $request->session()->put("stu_email",$student["stu_email"]);
                $request->session()->put("stu_name",$student["stu_name"]);
                $request->session()->put("stu_id",$student["id"]);
                $request->session()->put("class_id",$student["class_id"]);
    
                $request->session()->regenerate();
            
                redirect(route('home'));
            }else {
                $this->authenticationErr="Email or password not match";
            }
        }else{
            $this->authenticationErr="Email or password not match";           
        }
        
    }

    public function render()
    {
        return view('livewire.login')->layoutData(['title' => 'Login']);
    }
}
