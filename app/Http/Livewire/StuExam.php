<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\SelectOption;
use App\Models\Result;

class StuExam extends Component
{
    use WithPagination;
    public $marks=0,$ques_marks,$count,$exam_id,$exam_name,$question_id;
    public $h=00, $m=00,$s=60;

    
    protected $paginationTheme = 'bootstrap';

    public function endExam()
    {
        Result::updateOrInsert(
            ['userid' => session()->get("stu_id"), 'exam_id' => $this->exam_id],
            ['result' => $this->marks]
        );
        SelectOption::where('userid', session()->get("stu_id"))->delete();
        redirect(route("thankyou",$this->exam_id));
    }

    public function minusCount($Qid)
    {
        // $this->render();
        // user clear all radio button and marks
        if ($option = SelectOption::where([
            ["ques_id","=",$Qid],
            ["userid","=",session()->get("stu_id")],
            ])->value("option")){
                if (DB::table("chapterquestions")->where([['id','=',$Qid],['ans','=', $option]])->first()) {
                    
                    if ($this->marks!=0) {
                        $this->marks -= $this->ques_marks;
                    }
                }
            }
            SelectOption::where(["userid"=>session()->get("stu_id"),"ques_id"=>$Qid])->delete();
    }

    public function check($Qid,$page,$option)
    {
        if (!SelectOption::where([['ques_id','=',$Qid],['userid','=', session()->get("stu_id")],["option",'=',$option]])->first())
        {
            if ($selectOption=SelectOption::where([
                ["ques_id","=",$Qid],
                ["userid","=",session()->get("stu_id")],
            ])->first())
            {
                // dd($selectOption["option"]);
                if (DB::table("chapterquestions")->where([['id','=',$Qid],['ans','=', $selectOption["option"]]])->first())
                {
                    if ($this->marks!=0) {
                        $this->marks -= $this->ques_marks;
                    }
                }
                SelectOption::where("id",$selectOption["id"])->update(["option"=>$option]);

            } else {
                SelectOption::create([
                    "userid"=>session()->get("stu_id"),
                    "ques_id"=>$Qid,
                    "option"=>$option,
                    "page"=>$page,
                ]);
            }
    
            if (DB::table("chapterquestions")->where([['id','=',$Qid],['ans','=', $option]])->first())
            {
        
                $this->marks += $this->ques_marks;
            }
        }

        
   
    }

    public function mount($exam_id)
    {
        $this->exam_id=$exam_id;

        // if $exam_id and studemt id already presant in SelectOption then delete all data according to  $exam_id and studemt id
        if( SelectOption::where("userid",session()->get("stu_id"))->first()){
            SelectOption::where(["userid"=>session()->get("stu_id")])->delete();
        }
        
        $exam_info=DB::table("exams")->where("id",$exam_id)->get();
        $this->exam_name=$exam_info[0]->exam_name;

        // string to convert array
        $exam_info[0]->exam_timing=explode(':', $exam_info[0]->exam_timing);

        $this->h=$exam_info[0]->exam_timing[0];  // set hour
        $this->m=$exam_info[0]->exam_timing[1];  // set minute
        
        $question_info=DB::table("examquestionsets")->select("question_id","question_marks")->where("id",$exam_id)->first();
        $this->ques_marks=$question_info->question_marks;
        $this->question_id=explode(',', $question_info->question_id);
        
    }

    public function render()
    {
        
        $this->count = DB::table('chapterquestions')->whereIn('id', $this->question_id)->get()->count();
    
        $questions = DB::table('chapterquestions')->whereIn('id', $this->question_id)->simplePaginate(1);
        // dd($questions);
        $opt=SelectOption::where("userid",session()->get("stu_id"))->where("ques_id",$questions[0]->id)->value('option');
        
        $pagess=SelectOption::select("page")->where("userid",session()->get("stu_id"))->orderBy('page','asc')->pluck('page')->all();
        // dd($pagess);
        if ($opt==null) {
            $opt="";
        }
        
        return view('livewire.stu-exam',["questions"=>$questions,"opt"=>$opt,"pagess"=>$pagess])->layoutData(['title' => 'Exam']);
    }
}
