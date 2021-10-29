<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{

        public $name;
        public $email;
        public $password;
        public $password_confirmation;


    public function submit()
    {
        $this->validate([
            'email'    => 'required|email|min:3|max:50',
            'name'     => 'required|string|min:3|max:50',
            'password' => 'required|confirmed',
        ]);
        // User::create($this->form);
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.register')->layoutData(['title' => 'Register']);
    }
}
