@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <div class="row">
    <div class="col-md-10 col-lg-8 col-sm-12">
      @if(session()->has('status'))
      <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <form action="{{ route('admin.area.store', $for) }}" method="post">
        @csrf
        <input type="hidden" name="for" value="{{$for}}">
        @if($for == "state")
        <input type="hidden" name="state" value="NULL">
        @else
        <input type="hidden" name="state" value="{{ $state->id }}">
        @endif
        <div class="card">
          <div class="card-header">Add Area Scheme</div>
          <div class="card-body">
            @if($for != "state")
            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left">{{ __('State Name') }}</label>
              <div class="col-md-8">

                <input id="state-name" type="text" class="form-control @error('area') is-invalid @enderror"
                  name="state-name" value="{{ $state->value }}" readonly>
              </div>
            </div>
            @endif
            <div class="form-group row">
              <label for="area" class="col-md-3 col-form-label text-md-left">{{ __('Name') }}</label>

              <div class="col-md-8">
                <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area"
                  value="{{ old('area') }}" required>

                @error('area')
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

      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>ID</th>
          <th>Belong to</th>
          <th>District Name</th>
        </tr>
        @if($for != "state")
        @foreach($districts as $one)
        <tr>
          <td>{{ $one->id }}</option>
          <td>{{ $state->value }}</option>
          <td>{{ $one->value }}</option>
        </tr>
        @endforeach
        @endif
      </table>
    </div>
  </div>
</div>
@endsection