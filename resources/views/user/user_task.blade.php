@extends('layouts.main')
@section('css')

@endsection
@section('content')
<!--Start Breadcrumb-->
<!--------------------breadcrumb ---------------------->


<section class="bread-crumb-dash">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item">TASK</li>
                        </ul>
                    </nav>
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
                                                <div class="pull-right"><a href="{{route('user-task-add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a></div>
                                                    <h4 class="title">
                                                        TASK <span class="desktop"><br/>(Scroll left to see more)</span>
                                                    </h4>
                                                    
                                                </div>
                                                <div class="edit-info-area">
                                                    <div class="body">
                                                        <div style="overflow-x:auto;">  
                                                            <table class="table table-bordered" id="user-task-management" style="width:100%;">
                                                              <thead class="grey lighten-2">
                                                                <tr>
                                                                  <th scope="col">Sl. No</th>
                                                                  <th scope="col">Task Name</th>
                                                                  <th scope="col">Priority</th>
                                                                  <th scope="col">Status</th>
                                                                  <th scope="col">Date</th>
                                                                  <th scope="col">Time</th>
                                                                  <th scope="col">Action</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>

                                                              </tbody>
                                                             </table>
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
</section>
<!----------------------------------Main content End--------------------------->

@stop
@section('js')
<script src="{{ URL::asset('public/backend/js/jquery-confirm.js') }}" type="text/javascript"></script>
<script>

//    $(docuemnt).ready(function () {
//
//    });
$(function () {
    $('#user-task-management').DataTable({
        serverSide: true,
        responsive: true,
        ajax: '{{ route("user-task-datatable") }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'priority', name: 'priority'},
            {data: 'status', name: 'status'},
            {data: 'task_date', name: 'task_date'},
            {data: 'task_time', name: 'task_time'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endsection



