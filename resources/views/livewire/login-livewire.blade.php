<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="{{route('admin')}}" class="">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                    </a>
                    <h3>Sign In</h3>
                </div>
                <div class="form-floating mb-3">
                    <input wire:model="phone_number" name="phone_number" type="number" class="form-control" id="floatingInput"
                           placeholder="123456789">
                    <label for="floatingInput">Phone number</label>
                    @error('phone_number')
                    <span style="color: red">
                {{$message}}
            </span>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input wire:model="password" name="password" type="password" class="form-control" id="floatingPassword"
                           placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <span style="color: red">
                {{$message}}
            </span>
                    @enderror
                </div>
                @if($user_yoq)
                    <span style="color: red">
                    User not found
                    </span>
                @endif
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                </div>
                <button wire:click="login" type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                <p class="text-center mb-0">Don't have an Account? <a href="{{route('register')}}">Sign Up</a></p>
            </div>
        </div>
    </div>
</div>
