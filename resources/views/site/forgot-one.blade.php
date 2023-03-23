@extends('layouts.main') 
@section('css')
<style>
.help-block{
    color:red;
}
</style>
@endsection
@section('content')

<!--Start Login-->
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
                        <li class="list-inline-item">Forgot Password<</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>   
</section>
<!---------//end breadcrumbs---->
<section class="login-area p-top50 p-bottom50" id="bg-img-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-area-bg">
                    <div class="form-headings">
                        <h4>Reset Your Password</h4>
                        <p>* We will send you an email to reset your password</p>
                    </div>
                
                    <form class="login-form form--dark" id="forgot-form" action="{{ Route('forgot-password') }}" method="POST"> 
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Email Address</label>
                                    <input class="input-dark form-control" id="email" name="email" placeholder="Email" type="email" value="">
                                    <i class="icofont-user-alt-7 woox-icon"></i>
                                    <div class="help-block" id="error-email"></div>
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


<!--End Login-->
@stop
@section('js')


@endsection
