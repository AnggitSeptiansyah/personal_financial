@extends('layouts.app')

@section('content')
  <div class="box box-success" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('My Expense Data') }}</h3>
      <div class="pull-right">
        <a href="{{ route('expenses.create') }}" class="btn btn-success">{{ __('Add new expense') }}</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">{{ __('No.') }}</th>
            <th>{{ __('Expense Type') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('Amount') }}</th>
            <th>{{ __('Action') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($expenses as $expense)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $expense->expenseType->name }}</td>
              <td>{{ $expense->description }}</td>
              <td>{{ $expense->amount }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('expenses.edit', $expense) }}">{{ __('Edit') }}</a>
                <form action="{{ route('expenses.destroy', $expense) }}" method="post" style="display: inline-block">
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