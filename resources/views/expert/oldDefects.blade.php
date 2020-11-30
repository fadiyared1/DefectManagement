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
                     <!--   <a class="navbar-brand" href="{{  url('expert') }}">New Defects</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="{{  url('expert') }}">New Defects</a>
                            </li>
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Old Defects<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <!--  <a class="nav-link" href="#">Add Expert</a>-->
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{  url('expert/changepass') }}">Change Password</a>
                            </li>
                         <!--   <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>-->
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
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Title</th>
                          <th scope="col">Details</th>
                          <th scope="col">Date and time</th>
                          <th scope="col">Current Status</th>
                          <th scope="col">Change Status</th>
                        </tr>
                      </thead> 
                      <tbody>
                        <tr>
                         <!-- {{$f= $jour->where('idStatus','=',1)->first()}}-->
                          @if(count ($defect)>0)
                          @foreach($defect as $def)
                          @if($f->idDefect!=$def->id)
                          <th>{{$id=$def->id}}</th>
                          <td>{{$def->title}}</td>
                          <td><a href="{{ url('expert/view',$id)}}"><button>View</button></a></td>
                          <td>{{$def->dateOfDefect}}</td>
                          <!-- {{$s= $jour->where('idDefect','=',$def->idDefect)->first()}}-->
                          <!-- {{$ss= $stat->where('id','=',$s->idStatus)->first()}}-->
                          <td>{{$ss->status}}
                          <td class = "select"> 
                            <form method="HEAD" action="{{ url('expert/changestatus') }}" >
                              <select id="status" name="status" onchange="this.form.submit();">        
                                      <option value="">Choose</option>
                                      <option value="pending">Pending</option>
                                      <option value="fixed">Fixed</option>
                                      <option value="rejected">Rejected</option>
                              </select>
                              <input type="hidden" name="defect" value={{$def->idDefect}} />
                            </form>
                          </td> 
                        </tr>
                        
                        @endif
                        @endforeach
                       
                      </tbody>
                    </table>
                     @else
                        <p>No defects Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection