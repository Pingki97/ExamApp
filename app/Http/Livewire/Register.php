<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class Register extends Component
{

    public $name;
    public $email;
    public $mobile;
    public $address;
    public $password;
    public $classes;
    public $class_id;
    public $password_confirmation;

    // public function call_login()
    // {
    //     $this->emit('login');
    // }
    public function save(Request $request)
    {
        $this->validate([
            'email'    => 'required|email|min:3|max:50|unique:users',
            'name'     => 'required|string|min:3|max:50',
            'mobile'     => 'required|min:10',
            'class_id' => 'required',
            'password' => 'required|confirmed',
        ]);
        $student=Student::create([
            'stu_name' => $this->name,
            'stu_email' => $this->email,
            'stu_password' => bcrypt($this->password),
            'stu_mobile' => $this->mobile,
            'stu_address' => $this->address,
            'class_id' => $this->class_id,
        ]);
        // dd($student);
        $request->session()->put("stu_email",$student->stu_email);
        $request->session()->put("stu_name",$student->stu_name);
        $request->session()->put("stu_id",$student->id);
        $request->session()->put("class_id",$student["class_id"]);
        
        // $this->emit('user');
        redirect(route('home'));
    }

    public function render()
    {
        $this->classes = DB::table('classes')->get();
        
        return view('livewire.register',['classes'=>$this->classes])->layoutData(['title' => 'Register']);
    }
}
