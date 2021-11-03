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
        <div class="card">
          <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text">{{Session::get('stu_name')}} Student NAME  </p>
                <p class="card-text">{{Session::get('stu_name')}} EXAM time  </p>
                <p class="card-text">{{Session::get('stu_name')}} EXAM NAME  </p>
                <p class="card-text">{{Session::get('stu_name')}}  Button  </p>
              </div>
            <div class="col-md-6">
              <button id="button" style="display:none;" wire:click="endExam"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>