@extends('layouts.app')

@section('content')
  <div class="box box-primary" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Tambah data pendapatan') }}</h3>
    </div>

    <!-- form start -->
    <form role="form" action="{{ route('incomes.store') }}" method="post">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Jenis pendapatan</label>
          <select class="form-control" name="income_type_id">
            @foreach ($incomeTypes as $incomeType)
              <option value="{{ $incomeType->id }}">{{ $incomeType->name }}</option>
            @endforeach
          </select>
          @error('income_type_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Deskripsi pendapatan') }}</label>
          <span class="text-danger">*</span>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('description') }}">{{ __('Masukkan descripsi') }}</textarea>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Jumlah') }}</label>
          <span class="text-danger">*</span>
          <input type="numeric" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}" placeholder="{{ __('Masukkan jumlah uang') }}">
            @error('amount')
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