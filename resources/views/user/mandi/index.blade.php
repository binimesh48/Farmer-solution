@extends('layouts.app')

@section('content')
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <h2 class="">Mandi</h2>
      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>ID</th>
          <th>State Name</th>
          <th>Action</th>
        </tr>
        @foreach($state as $one)
        <tr>
          <td>{{ $one->id }}</option>
          <td>{{ $one->value }}</option>
          <td>
            <a href="{{ route('mandi.show', $one->id) }}">View</a>
          </option>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection