@extends('layouts.main') 
@section('css')

@endsection
@section('content')
<!------------breadcrumbs-------->
<section class="breadcrumbs register-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-content">
                    <h1>Register</h1>
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item"><a href="{{route('/')}}">Home</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>   
</section>
<!---------//end breadcrumbs---->
<!------------register area-------->
<section class="login-area p-top50 p-bottom50" id="bg-img-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-area-bg">
                    <div class="form-headings">
                        <h4>Register</h4>
                        <p>* All fields are required</p>
                    </div>
                
                    
                    <form id="signup-form" action="{{ Route('signup') }}" method="POST" class="login-form form--dark">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Name</label>
                                    <input class="input-dark form-control" id="full_name" name="full_name" placeholder="Enter Your Full Name" type="text" >
                                    <i class="icofont-user woox-icon"></i>
                                    <span class="help-block" id="error-full_name"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Email Address</label>
                                    <input class="input-dark form-control" id="email" name="email" placeholder="Enter Email Address" type="email">
                                    <i class="icofont-email woox-icon"></i>
                                    <span class="help-block" id="error-email"></span>
                                </div>
                            </div>

                            <!-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Contact Number</label>
                                    <input class="input-dark form-control" id="tel" name="tel" placeholder="Enter Contact Number" type="tel" value="7594562078">
                                    <i class="icofont-ui-touch-phone woox-icon"></i>
                                </div>
                            </div> -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Password</label>
                                    <input class="input-dark form-control" id="password" name="password" placeholder="Enter Your Password" type="password" >
                                    <i class="icofont-lock woox-icon"></i>
                                    <span class="help-block" id="error-password"></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="login-btns text-center">
                                    <button type="submit" class="btn login-btn">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------//register area------->



@stop
@section('js')


@endsection