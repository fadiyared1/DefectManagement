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
                        <a class="navbar-brand" href="{{  url('expert') }}">New Defects</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="{{  url('expert/oldDefects') }}">Old Defects<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <!--  <a class="nav-link" href="#">Add Expert</a>-->
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Change Password</a>
                            </li>
                         <!--   <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>-->
                          </ul>
                        </div>
                      </nav>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <!-- <div class="row justify-content-center"> <h2>New Defects</h2></div>-->
                   <section class="mb-5 text-center">

<p>Set a new password</p>

<form action="#!">

  <div class="md-form md-outline">
    <input type="password" id="newPass" class="form-control">
    <label data-error="wrong" data-success="right" for="newPass">New password</label>
  </div>

  <div class="md-form md-outline">
    <input type="password" id="newPassConfirm" class="form-control">
    <label data-error="wrong" data-success="right" for="newPassConfirm">Confirm password</label>
  </div>

  <button type="submit" class="btn btn-primary mb-4">Change password</button>

</form>
</section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection