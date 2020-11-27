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
                        <h1 id="welcome">Defect details</h1>
                        <br>
                         <div id="textarea">   
                        <textarea id="details" name="details" rows="4" cols="70">This field will contain all the details concerning the reported problem (report number, user’s name, description and expected reason)
                        </textarea>
                         </div>           
                           
                                   <!-- <div class="row justify-content-center">-->
                                   
                            </div>
                            <a href="/expert">back</a> 
                       
                         
                </div>
            </div>
        </div>
    </div>
</div>

@endsection