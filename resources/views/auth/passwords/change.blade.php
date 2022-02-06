@extends('layouts.app')

@section('content')
  <div class="box box-primary" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Ubah Password') }}</h3>
    </div>

    <!-- form start -->
    <form role="form" action="{{ route('change_password.update', auth()->id()) }}" method="post">
      @method('put')
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Password Lama') }}</label>
          <span class="text-danger">*</span>
          <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" placeholder="{{ __('Masukkan password lama') }}" value="{{ old('current_password') }}">
            @error('current_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Password Baru') }}</label>
          <span class="text-danger">*</span>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ __('Masukkan password baru') }}" value="{{ old('password') }}">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Konfirmasi Password') }}</label>
          <span class="text-danger">*</span>
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="{{ __('Masukkan ulang password baru') }}" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
      </div>
    </form>
  </div>
@endsection