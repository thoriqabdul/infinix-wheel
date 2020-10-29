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
                  {{-- <span class="text-white">or Sign in with</span> <br>
                  <img src="{{asset('image/x')}}" alt="" width="80"><br><br> --}}
                  <button class="btn btn-info">Register</button>
              </div>
              
        </div>
        </form>
    </div>
</div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
