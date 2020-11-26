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

                    <div >                                
                        <h1 id="welcome">
                        Please report the problem you have
                        </h1>
                        </div>
                         <div>
                         <div class="form-group">
                                        <label for="WC">WC<span class="WC"></span></label>
                                        <select type="WC" class="WC" id="WC" name="WC">
                                            <option value="">Choose...</option>
                                            <option value="defect1"> defect1 </option>
                                            <option value="defect2">defect2 </option>
                                            <option value="defect3"> defect3 </option>
                                            <option value="defect4"> defect4 </option>
                                            
                                        </select>
                        <br>
                                        <label for="tables">tables<span class="tables"></span></label>
                                        <select type="tables" class="tables" id="tables" name="tables">
                                            <option value="">Choose...</option>
                                            <option value="defect1"> defect1 </option>
                                            <option value="defect2">defect2 </option>
                                            <option value="defect3"> defect3 </option>
                                            <option value="defect4"> defect4 </option>
                                            
                                        </select>
                        <br>
                                        <label for="kitchen">kitchen<span class="kitchen"></span></label>
                                        <select type="kitchen" class="kitchen" id="kitchen" name="kitchen">
                                            <option value="">Choose...</option>
                                            <option value="defect1"> defect1 </option>
                                            <option value="defect2">defect2 </option>
                                            <option value="defect3"> defect3 </option>
                                            <option value="defect4"> defect4 </option>
                                            
                                        </select>
                                        
                                    </div>
                       
                        <img src="{{url('/images/plan5.png')}}" alt="plan" width="650"
                                 height="570" id="plan">
                         </div>
                         
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<footer id="footer1">-->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">      
    <p>contact us:
    <ul>
        <li>+96176010434</li>
        <li><a href="mailto:201710460@ua.edu.lb">201710460@ua.edu.lbb</a></li>
    </ul>
    </p>
   <!-- <p>+96176010434</p>
    <p>+96171700552</p>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <p><a href="mailto:201710460@ua.edu.lb">201710460@ua.edu.lbb</a></p>
    <p><a href="mailto:201710493@ua.edu.lb">201710493@ua.edu.lbb</a></p>
    </div>
    
</footer>-->
</nav>
@endsection