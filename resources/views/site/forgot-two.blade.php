@extends('layouts.main') 
@section('css')
<style>
.help-block{
    color:red;
}
</style>
@endsection
@section('content')

<!--Start Breadcrumb-->
<!------------breadcrumbs-------->
<section class="breadcrumbs forgot-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-content">
                    <h1>Forgot Password</h1>
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item"><a href="{{route('/')}}">Home</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item">Forgot Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>   
</section>
<!---------//end breadcrumbs---->
<!--End Breadcrumb-->
<section class="login-area p-top50 p-bottom50" id="bg-img-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-area-bg">
                    <div class="form-headings">
                        <h4>Reset Your Password</h4>
                        <p>* Enter your credentials to continue</p>
                    </div>
                
                    <form class="login-form form--dark" id="reset-password-form" action="{{ Route('set-password') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your New Password</label>
                                    <input class="input-dark form-control" id="password" name="password" placeholder="Enter Your Password" type="password" value="">
                                    <i class="icofont-lock woox-icon"></i>
                                    <div class="help-block" id="error-password"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Confirm Password</label>
                                    <input class="input-dark form-control" id="retype_password" name="retype_password" placeholder="Retype Your Password" type="password" value="">
                                    <i class="icofont-lock woox-icon"></i>
                                    <div class="help-block" id="error-retype_password"></div>
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
<!--Start Login-->

<!--End Login-->
@stop
@section('js')


@endsection
