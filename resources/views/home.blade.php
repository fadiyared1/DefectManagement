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
                    @if(Auth::user()->idRole == 0)
                    {{ __('You are logged in as administrator!') }}
                    @endif
                    @if(Auth::user()->idRole == 1)
                    {{ __('You are logged in as user!') }}
                    @endif
                    @if(Auth::user()->idRole == 2)
                    {{ __('You are logged in as expert!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
