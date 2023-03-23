@extends('layouts.main')
@section('css')
<style>
    .help-block{
        color:red;
    }
</style>
@stop
@section('content')
<!------------breadcrumbs-------->
<section class="breadcrumbs login-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-content">
                    <h1>Login</h1>
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item"><a href="{{route('/')}}">Home</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>   
</section>
<!---------//end breadcrumbs---->
<!------------login area-------->
<section class="login-area p-top50 p-bottom50" id="bg-img-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-area-bg">
                    <div class="form-headings">
                        <h4>Login</h4>
                        <p>* All fields are required</p>
                    </div>
                
                    <form class="login-form form--dark" id="login-form" action="{{ Route('login') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Email</label>
                                    <input class="input-dark form-control" id="email" name="email" placeholder="Username or Email" type="email" value="<?php
                                    if (isset($_COOKIE['email']) && $_COOKIE['email'] !== NULL) {
                                        echo $_COOKIE['email'];
                                    }
                                    ?>">
                                    <i class="icofont-user-alt-7 woox-icon"></i>
                                    <span class="help-block" id="error-email"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="input-label required">Enter Your Password</label>
                                    <input class="input-dark form-control" id="password" name="password" placeholder="Password" type="password" value="<?php
                                    if (isset($_COOKIE['password']) && $_COOKIE['password'] !== NULL) {
                                        echo $_COOKIE['password'];
                                    }
                                    ?>">
                                    <i class="icofont-lock woox-icon"></i>
                                    <span class="help-block" id="error-password"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="forgot-block">
                                    <div class="checkbox checkbox--style5">
                                        <label>
                                            <input type="checkbox" name="rememberMe"><span class="checkbox-material"><span class="check"></span></span>
                                            Remember me
                                        </label>
                                    </div>
                                    <a class="link-underlined" href="{{route('forgot-password')}}">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="login-btns text-center">
                                    <button type="submit" class="btn login-btn">
                                        LOGIN
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






@stop
@section('js')

@stop