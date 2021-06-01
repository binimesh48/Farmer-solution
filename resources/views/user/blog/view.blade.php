@extends('layouts.app')

@section('content')
<img src="/blog-image/{{$data->banner}}" alt="" class="w-100" style="max-height: 420px;    object-fit: cover;">
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-sm-12 col-md-10 offset-md-1">
      <div class="card mt-4">
        <div class="card-body">
        <h2>{{$data->title}}</h2>
          <p class>{!! $data->article !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection