@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      @if(session()->has('status'))
      <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <form action="" method="post">
        @csrf
        <div class="card">
          <div class="card-header">Add Area Scheme</div>
          <div class="card-body">

            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left">{{ __('District Name') }}</label>
              <div class="col-md-8">
                <select class="custom-select" name="area_id">
                  @foreach($districts as $one)
                  <option value="{{$one->id}}">{{ $one->value }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Name') }}</label>

              <div class="col-md-8">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <div class="form-group row">
              <label for="address" class="col-md-3 col-form-label text-md-left">{{ __('Address') }}</label>

              <div class="col-md-8">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                  value="{{ old('address') }}" required>
                @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            
            <div class="form-group row">
              <label for="phone" class="col-md-3 col-form-label text-md-left">{{ __('Mobile') }}</label>

              <div class="col-md-8">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                  value="{{ old('phone') }}" required>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
      <h2 class=" pt-4 ">Mandi in {{ $state->value }}</h2>
      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>ID</th>
          <th>District</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
        </tr>
        @foreach($mandi as $one)
        <tr>
          <td>{{ $one->id }}</option>
          <td>{{ $one->area->value }}</option>
          <td>{{ $one->address }}</option>
          <td>{{ $one->phone }}</option>
          <td>{{ $one->name }}</option>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection