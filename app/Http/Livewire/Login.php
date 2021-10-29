<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function submit()
    {
        $this->validate([
            'email'    => 'required|email|min:3|max:50',
            'password'     => 'required|string|min:3|max:50',
        ]);
        // User::create($this->form);
        return redirect(route('register'));
    }

    public function render()
    {
        return view('livewire.login')->layoutData(['title' => 'Login']);;
    }
}
