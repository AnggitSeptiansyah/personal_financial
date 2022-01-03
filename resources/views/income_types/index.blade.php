@extends('layouts.app')

@section('content')
  <div class="box box-success" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Jenis Pendapatan') }}</h3>
      <div class="pull-right">
        <a href="{{ route('income_types.create') }}" class="btn btn-success">{{ __('Tambah jenis pendapatan') }}</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Action') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($incomeTypes as $incomeType)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $incomeType->name }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('income_types.edit', $incomeType) }}">{{ __('Edit') }}</a>
                <form action="{{ route('income_types.destroy', $incomeType) }}" method="post" style="display: inline-block">
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