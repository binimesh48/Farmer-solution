@extends('layouts.app')

@section('content')
<div class="container p-4" style="min-height: 70vh;">
  <div class="row"> 
    <div class="col-md-8">
      @if(session()->has('status'))
        <p class="alert alert-success">{{session('status')}}</p>
      @endif
      <div class="card">
        <div class="card-header">Contact Form</div>
        <div class="card-body">
          <form method="post">
            @csrf
            <input type="hidden" data-form-email="true">
            <div class="form-group">
              <input type="text" class="form-control" name="name" required="" value="{{ $user->name ?? '' }}" placeholder="Name*">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" required="" value="{{ $user->email ?? '' }}" placeholder="Email*">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <select class="custom-select" name="reason">
                  <option value="">Select Reason of Contact</option>
                  <option value="Suggestion">Suggestion</option>
                  <option value="Feedback">Feedback</option>
                  <option value="Issue">Issue</option>
                  <option value="Complaint">Complaint</option>
                </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message" rows="7"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-block btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          Contact Info
        </div>
      </div>
    </div>
  </div>
</div>
@endsection