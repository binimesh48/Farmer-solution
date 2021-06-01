@extends('layouts.app')

@section('content')
<div class="container p-4" style="min-height: 70vh;">
  <div class="row"> 
    <div class="col-md-8">
      @if(session()->has('status'))
        <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <div class="card">
        <div class="card-header">Upload Pan</div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="image" class="col-md-3 ">PAN Card Image</label>
              <div class="col-md-9">
                <div class="custom-file ">
                  <input type="file" class="custom-file-input" id="image" name="image" required="">
                  <label class="custom-file-label" for="image">Choose file...</label>
                  <small class="form-text text-muted">Select Item File</small>
                </div>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-block btn-primary">Upload</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('#image').on('change', function () {
    var fileName = $(this).val();
    fileName = fileName.split('\\');
    $(this).next('.custom-file-label').html(fileName[fileName.length - 1]);
  })
</script>
@endsection