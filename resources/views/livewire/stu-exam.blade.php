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
    <livewire:navbar />
    <div class="container-fluid" oncopy="return false" oncut="return false" onpaste="return false">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        
                        @foreach ($questions as $item)
                            <div class="card-body">
                                <p class="card-text">Q {{$page}}. {{ $item->question }}</p>
                                <div class="d-flex inline">
                                    <div class="form-check">
                                        <input class="form-check-input" 
                                        @if ($opt=="a")
                                            checked
                                        @endif
                                        wire:click="check({{ $item->id }},{{$page}},'a')"  type="radio" name="Choose" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            (A)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"  wire:click="check({{ $item->id }},{{$page}},'b')" 
                                        @if ($opt=="b")
                                            checked

<<<<<<< HEAD
                                        @endif
                                        type="radio" name="Choose"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            (B)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Choose" 
                                        @if ($opt=="c")
                                            checked
                                        @endif
                                        wire:click="check({{ $item->id }},{{$page}},'c')"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            (C)
                                        </label>
=======
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" wire:click="check({{ $item->id }},'{{$item->stu_name}}')"
                                          type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                          (D)
                                      </label>
                                  </div>
                              </div>
                          </div>
>>>>>>> 639cacdbac3d595aa05cdeceb263b46d3e0e8e13

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"
                                        @if ($opt=="d")
                                            checked
                                        @endif
                                        wire:click="check({{ $item->id }},{{$page}},'d')"
                                            type="radio" name="Choose" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            (D)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button id="minusCountBtn" style="display:none;" wire:click="minusCount({{$item->id}})"></button>
                        @endforeach
                    </div>
          
                    {{ $questions->links() }}
                    <button class="page-link" id="submitBtn" style="display: inline-block" wire:click="endExam">Submit</button>
                    <button class="page-link" style="display: inline-block" onclick="sclear()">clear</button>
                    {{-- display: inline-block;
                    float: right; --}}

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">{{ ucwords(Session::get('stu_name')) }}</p>
                                    <p>{{ucwords($exam_name)}}</p>
                                    {{-- checking marks runtime <p>{{$marks}}</p> --}}
                                    
                                </div>
                                <div class="col-md-6">
                                    Timer
                                    <div id="timer">00:00:00</div>
                                    
                                </div>
                            </div>
                            <hr>
                            @for ($i = 1; $i <= $count; $i++)
                                <div class="d-inline-block">
                                    <div class="page-item">
                                    <button type="button"
                                    @if (in_array($i,$pagess))
                                        style="background-color: #5dc90a; color:white;"
                                    @endif
                                    id="b{{$i}}" class="page-link" wire:click="gotoPage({{$i}}, 'page')">{{$i}}</button>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            document.addEventListener('contextmenu', event => event.preventDefault());
            var h = {{ $h }};
            var m = {{ $m }};
            var s = {{ $s }};
            var start;
            start = setInterval(() => {

                timer();
            }, 1000);

            function sclear() {

                document.querySelector('input[name="Choose"]:checked').checked = false;
                document.getElementById("minusCountBtn").click();
            }   
            function timer() {
<<<<<<< HEAD
                if (h == 0 && m == 0 && s == 0) {
                    clearInterval(start);
                    document.getElementById('submitBtn').click();
                } else if (s != 0) {
                    s--;
                } else if (m != 0 && s == 0) {
                    s = 59;
                    m--;
                } else if (h != 0 && m == 0) {
                    m = 60;
                    h--;
                }
=======
              if (h == 0 && m == 0 && s == 0) {
                  clearInterval(start);
                  // document.getElementById('button').click();
              } else if (s != 0) {
                  s--;
              } else if (m != 0 && s == 0) {
                  s = 59;
                  m--;
              } else if (h != 0 && m == 0) {
                  m = 60;
                  h--;
              }
>>>>>>> 639cacdbac3d595aa05cdeceb263b46d3e0e8e13

              document.getElementById('timer').innerHTML = `${h}:${m}:${s}`;
              return;
            }

            function getData(page) {
                // fetch("{{url('/s')}}/"+id+"/"+option).then((data)=>{
                //     return data.json();
                // }).then(data => console.log(data));
                // axios(`{{url('/s')}}/${id}/${option}`).then(data => console.log(data.data[0]));
            }
        </script>
    </div>
</div>
