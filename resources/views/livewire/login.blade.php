<div>
    <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3">Login</h3>
                <hr>
              <form wire:submit.prevent="submit">
                <h5 class="text-danger text-center">{{$authenticationErr}}</h5>
                <div class="form-group">
                  <input type="text" class="form-control p_input" wire:model="email" placeholder="Email">
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" wire:model="password" placeholder="Password">
                  @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="d-flex justify-content-between"><input type="checkbox"><label style="margin-left: 5px; margin-top:9px">Remember me</label></div>
                  <a href="{{route('register')}}" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Log IN</button>
                </div>
                <a href="{{route('register')}}" class="btn btn-google-login btn btn-create-account btn-block">Create An Account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
