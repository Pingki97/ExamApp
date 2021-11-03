<div>
    <div class="container-scroller">
        <div class="container-fluid">
          <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
              <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-center mb-3">Register</h3>
                  <hr>
                  <form wire:submit.prevent="save">
                    <div class="form-group">
                      <input type="text" class="form-control p_input" wire:model="name" placeholder="Name">
                      @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control p_input" wire:model="email" placeholder="Email">
                      @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control p_input" wire:model="mobile" placeholder="mobile">
                      @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control p_input" wire:model="address" placeholder="address">
                      @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <select class="form-control" id="exampleFormControlSelect1" wire:model="class_id">
                          <option>Select Class</option>
                          @foreach ($classes as $item)
                          <option value="{{$item->id}}">{{$item->class_name}}</option>
                          @endforeach
                      </select>
                  </div>
                    <div class="form-group">
                      <input type="password" class="form-control " wire:model="password" placeholder="Password">
                      @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control p_input" wire:model="password_confirmation" placeholder="Repeat Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                    </div>
                    <p class="existing-user text-center pt-4 mb-0">Already have an acount?&nbsp;<a href="{{route('login')}}">Sign In</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
