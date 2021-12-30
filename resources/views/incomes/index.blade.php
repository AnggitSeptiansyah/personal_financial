@extends('layouts.app')

@section('content')
  <div class="box box-success" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Income Type') }}</h3>
      <div class="pull-right">
        <a href="{{ route('incomes.create') }}" class="btn btn-success">{{ __('Add new income') }}</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">{{ __('No.') }}</th>
            <th>{{ __('Income Type') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('Amount') }}</th>
            <th>{{ __('Action') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($incomes as $income)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $income->incomeType->name }}</td>
              <td>{{ $income->description }}</td>
              <td>{{ $income->amount }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('incomes.edit', $income) }}">{{ __('Edit') }}</a>
                <form action="{{ route('incomes.destroy', $income) }}" method="post" style="display: inline-block">
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