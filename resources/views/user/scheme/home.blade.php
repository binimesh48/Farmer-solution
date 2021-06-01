@extends('layouts.app')

@section('content')
<div class="container my-4" style="min-height: 70vh;">
  <h3 class="mb-2">Scheme</h3>
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
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
        <img src="/govt-scheme/{{ $one->banner }}" alt="" class="w-100"
          style="max-height: 320px;    object-fit: cover;">
        <div class="card-body">
          <p class>{{ $one->details }}</p>
        </div>
        <div class="card-footer">
          <div class="d-flex">
         
            <div>
              <a href="{{ route('scheme.user.show', $one->id) }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection