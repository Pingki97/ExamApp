<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function logout()
    {
        session()->forget("stu_id");
        session()->forget("stu_name");
        session()->forget("stu_email");
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
