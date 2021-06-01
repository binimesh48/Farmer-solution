@extends('layouts.app')

@section('content')

<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-10">
      <form action="{{ route('marketplace.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header">
            Sell Item
          </div>
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
              <div class="col-md-3">
                <label for="name" class="col-form-label text-md-left">Product Name</label>
              </div>
              <div class="col-md-9">
                <input id="name" type="text" class="form-control" name="name" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-3">
                <label for="price" class="col-form-label text-md-left">Price</label>
              </div>
              <div class="col-md-9">
                <input id="price" type="number" class="form-control" name="price" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="summary" class="col-md-3 col-form-label text-md-left">Summary</label>
              <div class="col-md-9">
                <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="article" class="col-md-3 col-form-label text-md-left">Details</label>
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
            <div class="form-group row">
              <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>
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

    $('#image').on('change', function () {
      var fileName = $(this).val();
      fileName = fileName.split('\\');
      $(this).next('.custom-file-label').html(fileName[fileName.length - 1]);
    })
</script>
@endsection