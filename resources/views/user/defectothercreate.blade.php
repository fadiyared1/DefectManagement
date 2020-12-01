@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <h3>Describe what is happening in the {{$var1}}</h3>
                    
                   <form action=" {{route('store')}}" method="HEAD">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="row justify-content-center">
                                <label for="exampleFormControlTextarea1">Specify Where Is The Problem</label>
                                <textarea class="form-control" id="var2" name="var2" rows="1"></textarea>
                              </div>
                              <div class="row justify-content-center">
                                <label for="exampleFormControlTextarea1">Problem Description</label>
                                <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                              </div>
                              <div class="form-group">
                                <div class="row justify-content-center">
                                <label for="exampleFormControlTextarea1">Expected Reason</label>
                                </div>
                                <textarea class="form-control" id="expectedReason" name="expectedReason" rows="2"></textarea>
                              </div>
                              <input type="hidden" id="var1" name="var1" value={{$var1}}>
                              
                              <div class="row justify-content-center">
                              <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                            {!!Form::close()!!}
                            <!--</form>-->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection