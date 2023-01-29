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
      <h3 class="box-title">{{ __('Data Piutang') }}</h3>
      <div class="pull-right">
        <a href="{{ route('receivables.create') }}" class="btn btn-success">{{ __('Add new Receivable') }}</a>
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
          @foreach ($receivables as $receivable)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $receivable->name }}</td>
              <td>{{ $receivable->phone_number }}</td>
              <td>{{ $receivable->address }}</td>
              <td>{{ $receivable->amount }}</td>
              <td>{{ $receivable->description }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('receivables.edit', $receivable) }}">{{ __('Edit') }}</a>
                <form action="{{ route('receivables.destroy', $receivable->id) }}" method="post" style="display: inline-block">
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