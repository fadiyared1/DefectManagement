
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!--<a class="navbar-brand" href="#">New Defects</a>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{  url('admin') }}">Journal<span class="sr-only">(current)</span></a>
                        </li>
                        <!--  <li class="nav-item">
                          <a class="nav-link" href="{{  url('admin/oldDefects')}}">Old Defects</a>
                        </li>-->
                        <li class="nav-item">
                          <a class="nav-link" href="{{  url('admin/addExpert') }}">Add Expert</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{  url('admin/changepass') }}">Change Password</a>
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
                            <th scope="col">Reported By</th>
                            <th scope="col">Status</th> 
                            <th scope="col">Assign Expert</th> 
                          </tr>
                        </thead>
                        <tbody>
                      <tr>
                      @if(count ($defect)>0)
                      @foreach($defect as $def)
                      <th>{{$def->id}}</th>
                      <td>{{$def->title}}</td>
                      <td><a href="{{ url('admin/view',$def->id)}}"><button>View</button></a>
                     <!--DO NOT DELETE IT'S A QUERY--><!--{{$u = $usr->where('id','=', $def->idUser)->first()}}--><!--DO NOT DELETE IT'S A QUERY-->
                      <td>{{$u->firstname}} {{$u->lastname}}</td>
                      <!--{{$f=$jour->where('idDefect','=',$def->id)->first()}}-->
                      <!--{{$s=$status->where('id','=',$f->idStatus)->first()}}-->
                      <td>{{$s->status}}</td>
                      <td class = "select">
                        
                      @if($f->idStatus == 1)
                       
                        <form method="HEAD" action="{{ url('admin/assign') }}" >
                        <select id="expert" name="expert" onchange="this.form.submit();">                           
                          @if(count ($array)>0)
                          @foreach($array as $a)
                    <option value={{$a->id}}>{{$a->firstname}}</option>
                          @endforeach
                          @else
                          <p>No users Found</p>
                          @endif     
                        </select> 
                        <input type="hidden" name="defect" value={{$def->id}} />
                        </form>
                        @else
                        <!--{{$as=$assig->where('idDefect','=',$def->id)->first()}}-->
                        <!--{{$exp=$usr->where('id','=',$as->idExpert)->first()}}-->
                        {{$exp->firstname}} {{$exp->lastname}}
                        @endif
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