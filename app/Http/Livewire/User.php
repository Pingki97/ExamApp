<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function addContact()
    {
 
        return redirect()->to('/exam');
    }

    public function render()
    {
        return view('livewire.user');
    }
}
