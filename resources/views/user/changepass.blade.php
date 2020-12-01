@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
            <h1 id="welcome">Welcome to Java shop </h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <!--         <a class="navbar-brand" href="{{  url('expert') }}">New Defects</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="{{  url('user') }}">Add Defect</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{  url('user/olddef') }}">View Old Defects<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Change Password<span class="sr-only">(current)</span></a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <h2>Set a new password</h2>
                    </div>
                    <br>
                    <div class="card-body">
                      <form method="POST" action="{{ route('changep') }}">
                          @csrf

                          <div class="form-group row">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control" name="current_password" required autocomplete="current-password">
                            </div>
                        </div>
                          
                    <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                      <div class="col-md-6">
                          <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new-password-confirmation">
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-dark">
                              {{ __('Change') }}
                          </button>
                      </div>
                  </div>
              </form>
                
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection