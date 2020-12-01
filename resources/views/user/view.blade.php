@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="row justify-content-center">
            <h1 id="welcome">Welcome to Java shop </h1>
            </div>
           
            <div class="card">
                <div class="card-header">{{$defect->title}} Defect</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">                         
                        <h1 id="welcome">Defect details</h2>
                        <br>
                         <div id="textarea">   
                        <textarea id="details" name="details" rows="6" cols="70" readonly>{{$defect->description}}</textarea>
                         </div>           
                         <h1 id="welcome">Expected Reason</h2>
                            <br>
                             <div id="textarea">   
                            <textarea id="details" name="details" rows="3" cols="70" readonly>{{$defect->expectedReason}}</textarea>
                             </div>   
                            <br>
                            Date of defect:{{$defect->dateOfDefect}}<br>
                            Date of last update on defect:{{$jour->updated_at}}
                                   <!-- <div class="row justify-content-center">-->
                                   
                            </div>
                            <br>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                   <a href="/user/olddef">
                                    <button class="btn btn-dark">
                                        back 
                                    </button></a>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection