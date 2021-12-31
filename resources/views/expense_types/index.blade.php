@extends('layouts.app')

@section('content')
  <div class="box box-primary" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Expense Type') }}</h3> 
      <div class="pull-right">
        <a href="{{ route('expense_types.create') }}" class="btn btn-primary">{{ __('Add new expense type') }}</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($expenseTypes as $expenseType)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $expenseType->name }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('expense_types.edit', $expenseType) }}">{{ __('Edit') }}</a>
                <form action="{{ route('expense_types.destroy', $expenseType) }}" method="post" style="display: inline-block">
                  @method('delete')
                  @csrf
                  <button class="btn btn-sm btn-danger" type="submit"
                  onclick="return confirm(' {{__('Are you sure') }} ')">{{ __('Delete') }}</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection