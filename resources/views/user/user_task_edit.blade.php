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
                            <li class="breadcrumb-item">Task Edit</li>
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
                                                    Task edit of {{$task->name}}
                                                </h4>
                                            </div>
                                            <div class="edit-info-area">
                                                <div class="body">
                                                    <div class="edit-info-area-form">
                                                        <form method="post" class="form" action="{{route('post-user-task-update',['id'=>$id])}}" id="user-task-form" enctype="multipart/form-data">
                                                            @csrf
                                                            
                            
                                                            <div class="row">
                                                                
                                                                <div class="col-lg-12">
                                                                    <label class="input-label required">Task Name</label>
                                                                    <input name="name" type="text" class="input-field" placeholder="Enter Full Name"  value="{{$task->name}}"> 
                                                                    <span class="help-block" id="err-name"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Task Status</label>
                                                                    <select class="form-control" name="status">
                                                                        <option value="">Choose Status</option>
                                                                        <option value="to-do" {{($task->status=='to-do')?'selected':''}}>to-do</option>
                                                                        <option value="in progress" {{($task->status=='in progress')?'selected':''}}>in progress</option>
                                                                        <option value="completed" {{($task->status=='completed')?'selected':''}}>completed</option>
                                                                        
                                                                    </select>
                                                                    <span class="help-block" id="err-status"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Task Priority</label>
                                                                    <select class="form-control" name="priority">
                                                                        <option value="">Choose Priority</option>
                                                                        <option value="due date" {{($task->priority=='due date')?'selected':''}}>due date</option>
                                                                        <option value="urgent" {{($task->priority=='urgent')?'selected':''}}>urgent</option>
                                                                        
                                                                    </select>
                                                                    <span class="help-block" id="err-priority"></span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Task Date.</label>
                                                                    <input name="task_date" type="date" class="input-field" placeholder="Enter Date" required="" value="{{$task->task_date}}"> 
                                                                    <span class="help-block" id="err-task_date"></span>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="input-label required">Task Time.</label>
                                                                    <input name="task_time" type="time" class="input-field" placeholder="Enter Time" required="" value="{{$task->task_time}}"> 
                                                                    <span class="help-block" id="err-task_time"></span>
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



