@extends('layouts.admin')

@section('content')
<div class="container my-2">
  <div class="row mb-2">
    <div class="col">
      <h3>Add Report</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      @if(session()->has('status'))
          <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <form action="" method="post">
        @csrf
        <div class="card">
          <div class="card-header">
            Add
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left">{{ __('Area Name') }}</label>
              <div class="col-md-8">
                <select class="custom-select" name="area">
                  @foreach($data as $one)
                  <option value="{{$one->id}}">{{ $one->value }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="min_temp" class="col-md-3 col-form-label text-md-left">{{ __('Min Temp') }}</label>
              <div class="col-md-8">
                <input id="min_temp" type="number" class="form-control" name="min_temp" placeholder="20">
              </div>
            </div>
            <div class="form-group row">
              <label for="max_temp" class="col-md-3 col-form-label text-md-left">{{ __('Max Temp') }}</label>
              <div class="col-md-8">
                <input id="max_temp" type="number" class="form-control" name="max_temp" placeholder="50">
              </div>
            </div>
            <div class="form-group row">
              <label for="good_for" class="col-md-3 col-form-label text-md-left">{{ __('Good For') }}</label>
              <div class="col-md-8">
                <input id="good_for" type="text" class="form-control" name="good_for" placeholder="rice, wheat, etc">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection