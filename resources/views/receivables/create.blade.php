@extends('layouts.app')

@section('content')
  <div class="box box-danger" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Tambah Data Piutang') }}</h3>
    </div>

    <!-- form start -->
    <form role="form" action="{{ route('receivables.store') }}" method="post">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Name') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="{{ __('Masukkan nama pemberi hutang') }}" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('No Telp / WA') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="{{ __('Masukkan no telp / hp') }}" value="{{ old('phone_number') }}">
            @error('phone_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Alamat') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="{{ __('masukkan alamat pemberi hutang') }}" value="{{ old('address') }}">
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Jumlah Piutang') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" placeholder="{{ __('Masukkan jumlah hutang') }}" value="{{ old('amount') }}">
            @error('amount')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Keterangan') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="{{ __('Masukkan keterangan') }}" value="{{ old('description') }}">
            @error('description')
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