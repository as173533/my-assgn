@extends('layouts.main')
@section('css')
<style>
    .help-block{
        color:red;
    }
    .p-tag-field {
    color: #000 !important;
    border-bottom: 1px solid #CCCCCC;
    padding-bottom: 21px;
    line-height: 28px !important;
    }
    .abc-links-in {
    margin-top: 20px;
    }
</style>
@endsection
@section('content')


<!------------breadcrumbs-------->
<section class="bread-crumb-dash">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item">Account Settings</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------//end breadcrumbs---->

<!--------------------------------Main content Start--------------------------->
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            @include('partials.left')
            <div class="col-md-9 col-sm-9 tab_dsh_2">
                <div class="dash-right-sec">
                    <div class="successfull">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="user-profile-details">
                                        <div class="account-info">
                                            <div class="header-area">
                                                <h4 class="title">
                                                    ACCOUNT Settings
                                                </h4>
                                            </div>
                                            <div class="edit-info-area">
                                                <div class="body">
                                                    <div class="edit-info-area-form">
                                                       
                                                        <form method="post" class="form" action="{{route('post-reset-password')}}" id="reset-password-frm">
                                                        @csrf
                            
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label class="input-label required">Current Password</label>
                                                                    <input name="old_password" type="password" class="input-field" placeholder="Old Password" required=""> 
                                                                    <span class="help-block"></span>
                                                                    <span class="help-block" id="err-old_password"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">New Password</label>
                                                                    <input name="password" type="password" class="input-field" placeholder="New Passwpord" required="">  
                                                                    <span class="help-block"></span>
                                                                    <span class="help-block" id="err-password"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Confirm Password</label>
                                                                    <input name="retype_password" type="password" class="input-field" placeholder="Confirm Password" required="">  
                                                                    <span class="help-block"></span>
                                                                    <span class="help-block" id="err-retype_password"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-links">
                                                                <button class="submit-btn" type="submit">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------------Main content End--------------------------->

@stop
@section('js')

@endsection



