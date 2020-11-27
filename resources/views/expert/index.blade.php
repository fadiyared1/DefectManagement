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
               <!--         <a class="navbar-brand" href="#">New Defects</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                          <li class="nav-item active">
                              <a class="nav-link" href="#">New Defects<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{  url('expert/oldDefects') }}">Old Defects</a>
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
                            <th scope="col">Date and time</th>
                            <th scope="col">View</th>
                            <th scope="col">Respond</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><a href="{{  url('expert/view') }}">View</a></td>
                            <td class = "select"> 
                                <select>        
                                        <option value="volvo">Accept</option>
                                        <option value="saab">Decline</option>
                                </select>
                                <td ALIGN="center"></td>
                            </td> 
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
   <!--                        </tbody>
                      </table>
                      
                   <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>-->
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection