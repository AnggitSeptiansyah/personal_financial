@extends('layouts.auth')

@section('content')
<div class="login-box">
  <div class="login-box-body">

    <p class="login-box-msg">{{ __('Login') }}</p>

    <form action="{{ route('login') }}" method="post">
        @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
    <!-- /.social-auth-links -->
    @if (Route::has('password.request'))
        <a class="text-center" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a><br>
    @endif
    <a href="{{ route('register') }}" class="text-center">Register new user</a>
  </div>  
</div>
@endsection
