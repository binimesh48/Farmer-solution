@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('admin.scheme.add') }}" class="btn btn-primary">Add Scheme</a>
  </div>

  @if(session()->has('error'))
  <p class="alert alert-danger">{{session('error')}}</p>
  @endif
  @if(session()->has('status'))
  <p class="alert alert-success">{{session('status')}}</p>
  @endif
  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Created By</th>
      <th>State</th>
      <th>Created On</th>
      <th>Action On</th>
    </tr>
    @foreach($data as $one)
    <tr>
      <td>{{ $one->id }}</td>
      <td>{{ $one->user->name }}</td>
      <td>{{ $one->state->value }}</td>
      <td>{{ $one->created_at }}</td>
      <td>
        <a class="btn btn-sm btn-danger" href="{{ route('admin.scheme.destroy', $one->id) }}" onclick="event.preventDefault();
              document.getElementById('delete-form-{{$one->id}}').submit();">
          {{ __('Delete') }}
        </a>

        <form id="delete-form-{{$one->id}}" action="{{ route('admin.scheme.destroy', $one->id) }}" method="POST"
          class="d-none">
          @csrf
          @method('DELETE')
        </form>
      </td>

    </tr>
    @endforeach
  </table>
</div>
@endsection