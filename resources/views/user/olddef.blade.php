
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
                          <a class="nav-link" href="{{url('user')}}">Add Defect</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">View Old Defects<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{  url('user/changepass') }}">Change Password</a>
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
                   <!-- <div class="row justify-content-center"> <h2>New Defects</h2></div>-->
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Details</th>
                            <th scope="col">Status</th> 
                            
                          </tr>
                        </thead>
                        <tbody>
                      <tr>
                      @if(count ($defect)>0)
                      @foreach($defect as $def)
                      <th>{{$def->id}}</th>
                      <td>{{$def->title}}</td>
                      <td><a href="{{ url('user/view',$def->id)}}"><button>View</button></a></td>
                      <!--{{$f=$jour->where('idDefect','=',$def->id)->first()}}-->
                      <!--{{$s=$status->where('id','=',$f->idStatus)->first()}}-->
                      <td>{{$s->status}}</td>
                      </tr>
                      @endforeach
                      @else
                      <p>No defects Found</p>
                      @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection