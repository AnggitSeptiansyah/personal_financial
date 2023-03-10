@extends('layouts.app')

@section('content')
  <div class="box box-primary" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Add Expense Data') }}</h3>
    </div>

    <!-- form start -->
    <form role="form" action="{{ route('expenses.store') }}" method="post">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label>Select</label>
          <select class="form-control" name="expense_type_id">
            @foreach ($expensesType as $expenseType)
              <option value="{{ $expenseType->id }}">{{ $expenseType->name }}</option>
            @endforeach
          </select>
          @error('income_type_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Description') }}</label>
          <span class="text-danger">*</span>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('description') }}">{{ __('input the description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{ __('Amount') }}</label>
          <span class="text-danger">*</span>
          <input type="numeric" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}" placeholder="{{ __('input the amount') }}">
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