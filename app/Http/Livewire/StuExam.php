<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class StuExam extends Component
{
    use WithPagination;
    public $marks=0;
    
    protected $paginationTheme = 'bootstrap';
    public function endExam()
    {
        $this->marks++;
        dd("bjaksbvio");
    }
    public $h=00, $m=00,$s=10;

    public function check($id,$a)
    {
       dd($a,$id);
    }
    public function render()
    {
        return view('livewire.stu-exam',["data"=>DB::table('students')->simplePaginate(1)])->layoutData(['title' => 'exam']);
    }
}
