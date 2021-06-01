@extends('layouts.app')

@section('content')
<div class="container my-2" style="min-height: 70vh;">
  <h3 class="my-4"> {{ $state->value }}'s Districts Weather</h3>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      <table class="table table-bordered">
        <thead>
          <td>Area</td>
          <td>Min Temp</td>
          <td>Max Temp</td>
          <td>Good for</td>
        </thead>
        @foreach($data as $one)
        <tr>
          <td>{{ $one->state->value }}</td>
          <td>{{ $one->min_temp }}</td>
          <td>{{ $one->max_temp }}</td>
          <td>{{ $one->good_for }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection