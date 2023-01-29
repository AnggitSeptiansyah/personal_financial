@extends('layouts.app')

@section('content')
  @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
  @endif
  <div class="box box-success" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('My Debts Data') }}</h3>
      <div class="pull-right">
        <a href="{{ route('debts.create') }}" class="btn btn-success">{{ __('Add new debt') }}</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">{{ __('No.') }}</th>
            <th>{{ __('Nama') }}</th>
            <th>{{ __('No. Telp/ WA') }}</th>
            <th>{{ __('Address') }}</th>
            <th>{{ __('Amount') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('Action') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($debts as $debt)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $debt->name }}</td>
              <td>{{ $debt->phone_number }}</td>
              <td>{{ $debt->address }}</td>
              <td>{{ $debt->amount }}</td>
              <td>{{ $debt->description }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('debts.edit', $debt) }}">{{ __('Edit') }}</a>
                <form action="{{ route('debts.destroy', $debt->id) }}" method="post" style="display: inline-block">
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