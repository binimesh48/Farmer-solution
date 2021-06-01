@extends('layouts.app')

@section('content')
<div class="container my-2" style="min-height: 70vh;">
  <div class="row my-4">
    <div class="col">
      <h3>Marketplace</h3>
    </div>
    <a href="{{ route('marketplace.create') }}" class="btn btn-primary">Start Selling</a>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      @foreach($data as $one)
      <div class="card mb-4">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-flex justify-content-start mb-2">
                {{ $one->name }}
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex justify-content-end mb-2">
                <div class="bg-dark text-white px-2 rounded">
                  {{ $one->state->value }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="marketplace/{{ $one->image }}" alt="{{ $one->name }}" style="width: 100%;max-height: 320px;object-fit: cover;">
        <div class="card-body">
          <div>
            <span class="bg-warning text-dark p-2 rounded">
              Rs. {{ $one->price }}
            </span>
            <div class="my-2">

            {{ $one->summary }}
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-between">
            <div>
              <a href="{{ route('marketplace.show', $one->id) }}" class="btn btn-primary">See Buying Details</a>
            </div>
            <div>
              @if($one->user_id == $loggedInUserId)
                <a href="{{ route('marketplace.delete', $one->id) }}" class="btn btn-danger">Delete</a>
              @else

              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection