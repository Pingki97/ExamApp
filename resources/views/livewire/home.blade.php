{{-- <div>
    <button wire:click="logout" class="btn btn-danger">logout</button>
          
    @if ($login)
    <livewire:login/>
    @endif
    @if ($register)
    <livewire:register/>        
    @endif
    @if ($user)
    <livewire:exam/>   
    @endif
</div> --}}
<div>
{{-- navbar component --}}
  <livewire:navbar/>
<div oncopy="return false" oncut="return false" onpaste="return false"  >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @forelse ($exam_seduler as $item)
        <div class="card m-5">
          <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text">{{ucwords(Session::get('stu_name'))}}</p>
                  <p class="card-text">Exam Name : {{ucwords($item->exam_name)}} </p>
                  <p class="card-text">Exam Time : {{$item->exam_start}} </p>
                  <p class="card-text">Exam Marks :{{$item->exam_marks}}</p>
                  <p class="card-text">Pass Marks :{{$item->exam_pass_marks}}</p>
                  <p class="card-text">
                    @if ($item->exam_status=="A")
                    <p style="background-color: rgb(64, 228, 138);padding:4px 8px;border-radius:50px;">
                      <a href="{{url('/student/'.$item->id)}}" style="text-decoration: none;color:white;"> Start Exam</a></p>
                    @else
                        <p style="background-color: rgb(212, 141, 120);color:white;padding:4px 8px;border-radius:50px;">Time over</p>
                    @endif
              </div>
              {{-- <div class="col-md-6">
                <button id="button" style="display:none;" wire:click="endExam"></button> 
              </div> --}}
            </div>
          </div>
          @empty
            <div class="text-center">
              <h5>No exam assigned</h5>
            </div>
          @endforelse
      </div>
    </div>
  </div>
</div>
</div>