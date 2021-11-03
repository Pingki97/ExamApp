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
                      @foreach ($data as $item)
                          <div class="card-body">
                              <p class="card-text">Q {{$page}}. {{ $item->stu_name }}</p>
                              <div class="d-flex inline">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                                          id="flexRadioDefault2">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                          (A)
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                                          id="flexRadioDefault2">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                          (B)
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                                          id="flexRadioDefault2">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                          (C)
                                      </label>

                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" wire:click="check({{ $item->id }},'d')"
                                          type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                          (D)
                                      </label>
                                  </div>
                              </div>
                          </div>

                      @endforeach
                  </div>
                  {{ $data->links() }}
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <p class="card-text">{{ ucwords(Session::get('stu_name')) }}</p>
                                  <p>EXAM NAME</p>
                              </div>
                              <div class="col-md-6">
                                  Timer
                                  <div id="timer">00:00:00</div>
                                  <button id="button" style="display:none;" wire:click="endExam"></button>
                              </div>
                          </div>
                          <hr>
                          @for ($i = 1; $i <= 19; $i++)
                          <div class="d-inline-block">
                            <div class="page-item">
                              <button type="button" class="page-link" wire:click="gotoPage({{$i}}, 'page')">{{$i}}</button>
                            </div>
                          </div>
                            @endfor
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <script>
            var h = {{ $h }};
            var m = {{ $m }};
            var s = {{ $s }};
            var start;
            start = setInterval(() => {

                timer();
            }, 1000);

            function timer() {
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

                document.getElementById('timer').innerHTML = `${h}:${m}:${s}`;
                return;
            }
        </script>
    </div>
</div>
