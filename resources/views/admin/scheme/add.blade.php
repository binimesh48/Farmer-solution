@extends('layouts.admin')

@section('content')
<div class="container my-4">
  <div class="row">
    <div class="col-md-10 col-lg-8 col-sm-12">
      @if(session()->has('status'))
      <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <form action="{{ route('admin.scheme.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header">Add New Scheme</div>
          <div class="card-body">
            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left">{{ __('State Name') }}</label>
              <div class="col-md-9">
                <select class="custom-select" name="state">
                  @foreach($state as $one)
                  <option value="{{$one->id}}">{{ $one->value }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Name') }}</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="name" name="name"/>
              </div>
            </div>
            <div class="form-group row">
              <label for="details" class="col-md-3 col-form-label text-md-left">{{ __('Details') }}</label>
              <div class="col-md-9">
                <textarea class="form-control" id="details" name="details" rows="2"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="article" class="col-md-3 col-form-label text-md-left">{{ __('Article') }}</label>
              <div class="col-md-9">
                <textarea class="form-control" id="article" name="article" rows="12"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="image" class="col-md-3 ">Select Image</label>
              <div class="col-md-9">
                <div class="custom-file ">
                  <input type="file" class="custom-file-input" id="image" name="image" required>
                  <label class="custom-file-label" for="image">Choose file...</label>
                  <small class="form-text text-muted">Select Item File</small>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'#article',
        width: '100%',
        height: 300
    });
</script>
@endsection