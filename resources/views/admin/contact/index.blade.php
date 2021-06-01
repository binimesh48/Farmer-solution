@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <h2 class="my-4">Contact</h2>
  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Reason</th>
      <th>Message</th>
    </tr>
    @foreach($data as $one)
      <tr>
        <td>{{ $one->id }}</td>
        <td>{{ $one->name }}</td>
        <td>{{ $one->email }}</td>
        <td>{{ $one->phone }}</td>
        <td>{{ $one->reason }}</td>
        <td>{{ $one->message }}</td>
      </tr>
    @endforeach
  </table>
</div>
@endsection