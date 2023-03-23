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
                            <li class="breadcrumb-item">My Account</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                                    ACCOUNT DETAILS
                                                </h4>
                                            </div>
                                            <div class="edit-info-area">
                                                <div class="body">
                                                    <div class="edit-info-area-form">
                                                        <form method="post" class="form" action="{{route('post-myprofile')}}" id="customer-editprofile-form" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="upload-images">
                                                                    <img id="blah" src="{{($user->image!='')? URL::asset('public/uploads/user').'/'.$user->image:URL::asset('public/frontend/images/profile.jpg') }}" alt="profile">
                                                                    </div>  
                                                                </div>
                                                            </div> -->
                            
                                                            <div class="row">
                                                                
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Your Name</label>
                                                                    <input name="full_name" type="text" class="input-field" placeholder="Enter Full Name" required="" value="{{isset($user->full_name)?$user->full_name:''}}" readonly> 
                                                                    <span class="help-block" id="err-full_name"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Your Email Address</label>
                                                                    <input name="email" type="email" class="input-field" placeholder="Enter Email addresss" required="" value="{{isset($user->email)?$user->email:''}}" readonly> 
                                                                    <span class="help-block" id="err-email"></span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Your Contact No.</label>
                                                                    <input name="phone" type="tel" class="input-field" placeholder="Enter Your Phone No." required="" value="{{isset($user->phone)?$user->phone:''}}"> 
                                                                    <span class="help-block" id="err-phone"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Your Recent Photograph</label>
                                                                    <input name="photo" type="file" accept="image/*" capture="camera" class="input-field" placeholder="Choose Your Photo" required=""> 
                                                                    <span class="help-block" id="err-photo"></span>
                                                                    @if(isset($user->photo) && $user->photo!='')
                                                                    <div class="form-group">
                                                                        <div class="col-md-10">
                                                                            <a href="{{isset($user->photo)?URL::asset('public/uploads/user/'.$user->photo):''}}" class="btn btn-xs btn-primary pull-left" target="_blank"><i class="fa fa-eye"></i>View Photo</a><br/>
                                                                        </div>
                                                                    </div>
                                                                    @endif
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



