@extends('layouts.app')

@section('content')

<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-10">
      <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header">
            Create Blog Form
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
                <label for="title" class="col-form-label text-md-left">Title</label>
              </div>
              <div class="col-md-9">
                <input id="title" type="text" class="form-control" name="title" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-3">
                <label for="summary" class="col-form-label text-md-left">Summary</label>
              </div>
              <div class="col-md-9">
                <textarea id="summary" rows="3" type="text" class="form-control" name="summary" required=""></textarea>
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
              <label for="content" class="col-md-3 col-form-label text-md-left">Context</label>
              <div class="col-md-9">
                <textarea class="form-control" id="content" name="content" rows="12"></textarea>
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
        selector:'#content',
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