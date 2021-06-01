@extends('layouts.app')

@section('content')
<img src="/marketplace/{{$data->image}}" alt="" class="w-100" style="max-height: 420px;    object-fit: cover;">
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <div class="card">
        <div class="card-header">
          Product Description
        </div>
        <div class="card-body">
        <h2>{{$data->name}}</h2>
       
          {!! $data->article !!}

          <span class="bg-primary text-light p-2 rounded">
            Rs. {{ $data->price }}
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Seller Info
        </div>
        <div class="card-body p-0">
          <table class="table table-striped table-bordered mb-0">
            <tr>
              <td>Name</td>
              <td>{{ $data->user->name }}</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>{{ $data->user->phone }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $data->user->email }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection