@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
            <h1 id="welcome">Welcome to Java shop </h1>
            </div>
            <div class="card">
                <div class="card-header">User Dashboard</div>

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
                                        <select type="WC" class="WC" id="WC" name="WC" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="ToiletSeat">Toilet Seat</option>
                                            <option value="Door">Door </option>
                                            <option value="Light">Light</option>
                                            <option value="Sink">Sink</option>
                                            <option value="otherwc">Other</option>
                                            
                                        </select>
                                        <input type="hidden" value="" />
                                        </form>
                         </div>              
                         <div class="row justify-content-center">  
                                        <form method="HEAD" action="{{ url('user/defect') }}" >
                                        <label for="Lounge">Lounge<span class="Lounge"></span></label>
                                        <select type="Lounge" class="Lounge" id="Lounge" name="Lounge" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="TableChair">Table or chair</option>
                                            <option value="Couch">Couch</option>
                                            <option value="Door">Door</option>
                                            <option value="Window">Window</option>
                                            <option value="Light">Light</option>
                                            <option value="otherlounge">Other</option>
                                        </select>
                                        <input type="hidden" value="" />
                                        </form>
                         </div>
                         <div class="row justify-content-center">
                                        <form method="HEAD" action="{{ url('user/defect') }}" >
                                        <label for="kitchen">Kitchen<span class="kitchen"></span></label>
                                        <select type="kitchen" class="kitchen" id="kitchen" name="kitchen" onchange="this.form.submit();">
                                            <option value="">Choose...</option>
                                            <option value="Sink">Sink</option>
                                            <option value="Fridge">Fridge</option>
                                            <option value="Oven">Oven</option>
                                            <option value="Microwave">Microwave</option>
                                            <option value="Door">Door</option>
                                            <option value="Light">Light</option>
                                            <option value="otherkitchen">Other</option>
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