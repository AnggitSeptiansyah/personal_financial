@extends('layouts.app')

@section('content')
  <div class="box box-success" style="margin-top: 20px">
    <div class="box-header with-border">
      <h3 class="box-title">{{ __('Income Type') }}</h3> 
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
          @foreach ($income_types as $income_type)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $task->title }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{ __('Edit') }}</a>
                <form action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="post" style="display: inline-block">
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