@extends('layouts/defaultLogin')
@section('content')
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                            <a  class="text-center" href="{{ url('login') }}">
                                 <h4>LOGIN SYSTEME</h4>
                            </a><hr style="background-color: red;">
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="checklog">
                                    <div class="form-group">
                                        <input type="text" name="user" class="form-control"  placeholder="Username admin" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="pwd" class="form-control"  placeholder="Password admin" required>
                                    </div>
                                   <a href="{{ url('/') }}" class="btn login-form__btn submit w-100">
                                    Sign in
                                 {{-- <button type="submit" class="btn login-form__btn submit w-100">Sign in</button> --}}
                                </a>
                                   
                                </form>
                            <p class="mt-5 login-form__footer">Have account <a href="{{ url('/') }}" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection