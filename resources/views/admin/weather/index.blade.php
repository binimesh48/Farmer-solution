@extends('layouts.admin')

@section('content')
<div class="container my-2">
  <div class="row mb-2">
    <div class="col">
      <h3>Weather Report</h3>
    </div>
    <a href="{{ route('admin.weather.create') }}" class="btn btn-primary">Add</a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <td>ID</td>
          <td>Area</td>
          <td>Min Temp</td>
          <td>Max Temp</td>
          <td>Good for</td>
          <td>Detail</td>
        </thead>
        @foreach($data as $one)
        <tr>
          <td>{{ $one->id }}</td>
          <td>{{ $one->state->value }}</td>
          <td>{{ $one->min_temp }}</td>
          <td>{{ $one->max_temp }}</td>
          <td>{{ $one->good_for }}</td>
          <td>
            <a href="{{ route('admin.weather.edit', $one->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('admin.weather.delete', $one->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection