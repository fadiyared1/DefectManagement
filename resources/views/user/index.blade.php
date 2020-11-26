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
                            
                         <div class="form-group">
                                        <label for="WC">WC<span class="WC"></span></label>
                                        <select type="WC" class="WC" id="WC" name="WC">
                                            <option value="">Choose...</option>
                                            <option value="Toilet Seat">Toilet Seat</option>
                                            <option value="Door">Door </option>
                                            <option value="Light">Light</option>
                                            <option value="Sink">Sink</option>
                                            <option value="otherwc">Other</option>
                                            
                                        </select>
                        
                                        <label for="Lounge">Lounge<span class="Lounge"></span></label>
                                        <select type="Lounge" class="Lounge" id="Lounge" name="Lounge">
                                            <option value="">Choose...</option>
                                            <option value="TableChair">Table or chair</option>
                                            <option value="Couch">Couch</option>
                                            <option value="Door">Door</option>
                                            <option value="Window">Window</option>
                                            <option value="Light">Light</option>
                                            <option value="otherlounge">Other</option>
                                            
                                        </select>
                        
                                        <label for="kitchen">Kitchen<span class="kitchen"></span></label>
                                        <select type="kitchen" class="kitchen" id="kitchen" name="kitchen">
                                            <option value="">Choose...</option>
                                            <option value="Sink">Sink</option>
                                            <option value="Fridge">Fridge</option>
                                            <option value="Oven">Oven</option>
                                            <option value="Microwave">Microwave</option>
                                            <option value="Door">Door</option>
                                            <option value="Light">Light</option>
                                            <option value="otherkitchen">Other</option>
                                        </select>
                                        
                                    </div>
                                    
                                   <!-- <div class="row justify-content-center">-->
                                    <img src="{{url('/images/plan5.png')}}" alt="plan" width="700" sheight="570" id="plan">
                                    </div>
                                
                       
                         
                </div>
            </div>
        </div>
    </div>
</div>

@endsection