@extends('layouts.app')

@section('content')
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <h2 class=" pt-4 ">Mandi in {{ $state->value }}</h2>
      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>District</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
        </tr>
        @foreach($mandi as $one)
        <tr>
          <td>{{ $one->area->value }}</option>
            <td>{{ $one->name }}</option>
          <td>{{ $one->address }}</option>
          <td>{{ $one->phone }}</option>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection