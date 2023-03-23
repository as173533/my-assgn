@extends('layouts.main')
@section('page_css')

@stop
@section('content')


<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>dashboard</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>DASHBOARD</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->
<!--------------------------------Main content Start--------------------------->
<section class="main-content">
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
                                                        DASHBOARD
                                                    </h4>
                                                </div>
                                                <div class="edit-info-area">
                                                    <div class="level-section">
                                                        <div class="level-select"><h3>Level</h3></div>
                                                        <form action="{{route('start-quiz')}}">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                        <input id="349" type="radio" name="level" value="Easy" required>
                                                                        <label for="349" class="level-name">Easy </label><br>
                                                                        <input id="350" type="radio" name="level" value="Intermediate" required>
                                                                        <label for="350" class="level-name">Intermediate </label><br>
                                                                        <input id="351" type="radio" name="level" value="Difficult" required>
                                                                        <label for="351" class="level-name">Difficult </label><br>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                <div class="box-1">
                                                                    <p>Select difficulty level</p>
                                                                </div> 

                                                                <div class="box-2">
                                                                    <p>Select the level of difficulty in your Grammarzinga quiz! You can’t switch levels mid-way, so be sure of your chosen level. </p>
                                                                </div> 
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn level-btn text-white">Start</button>
                                                                    </div>
                                                                </div>
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
    </section> 
</section>
<!----------------------------------Main content End--------------------------->
@stop