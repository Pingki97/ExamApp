<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class Navbar extends Component
{
    public function logout(Request $request)
    {
        $request->session()->forget("stu_id");
        $request->session()->forget("stu_name");
        $request->session()->forget("stu_email");
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
