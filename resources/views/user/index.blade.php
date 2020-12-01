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
                          <li class="nav-item active">
                              <a class="nav-link" href="#">Add Defect<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{  url('user/olddef') }}">View Old Defects</a>
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
                           <div class="row justify-content-center">                         
                        <h1 id="welcome">Please report your problem</h1>
                           </div>
                     <br>
                     <div class="row justify-content-center">  
                        <!-- <div class="form-group">   -->
                                        <form method="HEAD" action="{{ url('user/defect') }}" >
                                        <label for="WC">WC<span class="WC"></span></label>
                                        <select type="WC" class="WC" id="room" name="room" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="WC_ToiletSeat">Toilet Seat</option>
                                            <option value="WC_Door">Door </option>
                                            <option value="WC_Light">Light</option>
                                            <option value="WC_Sink">Sink</option>
                                            <option value="WC_other">Other</option>
                                            
                                        </select>
                                        <!--<input type="hidden" value=""/>-->
                                        <!--<input type="text" />-->
                                        </form>
                         </div>              
                         <div class="row justify-content-center">  
                                        <form method="HEAD" action="{{ url('user/defect') }}" >
                                        <label for="Lobby">Lounge<span class="Lobby"></span></label>
                                        <select type="Lobby" class="Lobby" id="room" name="room" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="Lobby_Table/Chair">Table or chair</option>
                                            <option value="Lobby_Couch">Couch</option>
                                            <option value="Lobby_Door">Door</option>
                                            <option value="Lobby_Window">Window</option>
                                            <option value="Lobby_Light">Light</option>
                                            <option value="Lobby_other">Other</option>
                                        </select>
                                        <input type="hidden" value="" />
                                        </form>
                         </div>
                         <div class="row justify-content-center">
                                        <form method="HEAD" action="{{ url('user/defect') }}" >
                                        <label for="kitchen">Kitchen<span class="kitchen"></span></label>
                                        <select type="kitchen" class="kitchen" id="room" name="room" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="kitchen_Sink">Sink</option>
                                            <option value="kitchen_Fridge">Fridge</option>
                                            <option value="kitchen_Oven">Oven</option>
                                            <option value="kitchen_Microwave">Microwave</option>
                                            <option value="kitchen_Door">Door</option>
                                            <option value="kitchen_Light">Light</option>
                                            <option value="kitchen_other">Other</option>
                                        </select>
                                        <input type="hidden" value="" />
                                        </form>
                                        
                                    </div>
                                    
                                    <div class="row justify-content-center">
                                    <img src="{{url('/images/plan5.png')}}" alt="plan" width="700" height="570" id="plan">
                                    </div>
                                
                       
                         
                </div>
            </div>
        </div>
    </div>
</div>

@endsection