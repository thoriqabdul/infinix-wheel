@extends('layouts.base')

@section('content')
<div class="col-lg-4 col-md-6 col-12 the_wheel text-center">
    <div class="card bg-dark" style="border-radius: 5%;">
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="card-body p-5" style="margin-top: 40px">
            <!-- Material input -->
                <div class="md-form input-with-post-icon ">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="suffixInside" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="suffixInside"></label>
              </div><div class="md-form input-with-post-icon">
                <i class="fas fa-lock input-prefix"></i>
                <input type="email" id="suffixInside" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="suffixInside"></label>
              </div><div class="md-form input-with-post-icon">
                <i class="fas fa-lock input-prefix"></i>
                <input type="password" id="suffixInside" class="form-control @error('password') is-invalid @enderror" placeholder="Verify Passcode" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="suffixInside"> </label>
              </div>
              <div class="">
                  <button class="btn btn-info">Register</button>
              </div>
              
        </div>
        </form>
    </div>
</div>
@endsection
