@extends('layouts.app')

@section('content')
  <div class="box box-danger" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Edit Expense Type') }}</h3>
    </div>

    <!-- form start -->
    <form role="form" action="{{ route('expense_types.update', $expenseType) }}" method="post">
      @method('put')
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Name') }}</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="{{ __('Input expense type name') }}" value="{{ old('name', $expenseType->name) }}">
            @error('name')
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