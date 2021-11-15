<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Result;

class Thankyou extends Component
{
    public $exam_id;
    public function mount($exam_id)
    {

        $this->exam_id = $exam_id;
        
    }

    public function render()
    {
        $result=Result::where(["userid"=>session()->get("stu_id"),"exam_id"=>$this->exam_id])->value("result");
        return view('livewire.thankyou',["result"=>$result])->layoutData(['title' => 'Thankyou']);
    }
}
