@extends('layouts.base')

@section('content')
<div class="col-lg-4 col-md-6 col-12 the_wheel text-center">
            <div class="card bg-dark" style="border-radius: 5%;">
                <div class="card-body p-5" style="margin-top: 40px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <!-- Material input -->
                    <div class="md-form input-with-post-icon">
                        <i class="fas fa-lock input-prefix"></i>
                        <input type="text" id="suffixInside" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="md-form input-with-post-icon">
                        <i class="fas fa-lock input-prefix"></i>
                        <input type="password" id="suffixInside" class="form-control @error('password') is-invalid @enderror" placeholder="Verify Passcode" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="">
                        <span class="text-white">or Sign in with</span> <br>
                        <img src="{{asset('image/x.png')}}" alt="" width="80"><br><br>
                        <button class="btn btn-info">Sign In</button>
                    </div>
                    </form>
                </div>
            </div>
</div>
@endsection
