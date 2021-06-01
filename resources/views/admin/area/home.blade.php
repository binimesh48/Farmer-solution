@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('admin.area.create','state') }}" class="btn btn-primary mr-2">Add State</a>
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
      <th>State</th>
      <th>Created By</th>
      <th>Created On</th>
      <th>Action</th>
    </tr>
    @foreach($data as $one)
    <tr>
      <td>{{ $one->id }}</td>
      <td>{{ $one->value }}</td>
      <td>{{ $one->user->name }}</td>
      <td>{{ $one->created_at }}</td>
      <td>
        <a href="{{ route('admin.area.create','district') }}?id={{$one->id}}" class="btn btn-secondary btn-sm">Add
          District</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection