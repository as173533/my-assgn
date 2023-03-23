<?php
$routeArray = app('request')->route()->getAction();
$controllerAction = class_basename($routeArray['controller']);
list($controller, $action) = explode('@', $controllerAction);
?>



<div class="col-md-3 col-sm-3 tab_dsh_1">
    <div class="dash-left-area">
        <ul class="dashboard-ul">
            <li>
                <span class="userz-i">
                    <i class="icofont-user-alt-4"></i>
                </span>
                <span class="userz-n">
                    Hi, {{Auth()->guard('frontend')->user()->full_name}}
                </span>
            </li>
        </ul>
        <ul class="dashboard-left-menu-ul">
            <li class="{{(in_array(\Request::route()->getName(),['my-profile']))?'active':''}} add-border">
                <a href="{{route('my-profile')}}">
                    <span class="dash-i">
                        <i class="fa fa-user"></i>
                    </span>
                    <span class="dash-n">
                        My Account
                    </span>
                </a>
            </li>
            <li class="{{(in_array(\Request::route()->getName(),['my-account']))?'active':''}} add-border">
                <a href="{{route('my-account')}}">
                    <span class="dash-i">
                        <i class="fa fa-cog"></i>
                    </span>
                    <span class="dash-n">
                        Account Settings
                    </span> 
                </a>
            </li>
            <li class="{{(in_array(\Request::route()->getName(),['user-task']))?'active':''}} add-border">
                <a href="{{route('user-task')}}">
                    <span class="dash-i">
                        <i class="fa fa-cog"></i>
                    </span>
                    <span class="dash-n">
                        Task
                    </span> 
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <span class="dash-i">
                        <i class="fa fa-sign-out"></i>
                    </span>
                    <span class="dash-n"> 
                        LOGOUT
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>



