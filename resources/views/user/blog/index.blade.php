@extends('layouts.app')

@section('content')
<div class="container my-4" style="min-height: 70vh;">
  @guest
  <h3 class="mb-2">Blog</h3>
  @endguest
  @auth
  <div class="d-flex justify-content-between mb-2">
    <h3 class="mb-2">Blog</h3>
    <a href="{{ route('blog.create')}}" class="btn btn-primary mr-2">Add Blog</a>
  </div>
  @endif
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
      @foreach($data as $one)
      <div class="card mb-4">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-flex justify-content-start mb-2">
                {{ $one->title }}
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
        <img src="https://kj1bcdn.b-cdn.net/media/14173/pm-modi.jpg" alt="" class="w-100"
          style="max-height: 320px;    object-fit: cover;">
        <div class="card-body">
          <p class>{{ $one->summary }}</p>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-between">
              <div>
                <a href="{{ route('blog.show', $one->id) }}" class="btn btn-primary btn-sm px-4">Read</a>
              </div>
              <div>
                @if($one->user_id ==  $loggedInUserId)
                <a href="{{ route('user.blog.delete', $one->id) }}" class="btn btn-sm btn-danger">Delete</a>
              @else
                {{ $one->user->name }}
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