@php
$page = ($title) ? $title : '';
$user = DB::table('user_info')->select('userid','main_access')->where('userid',user_id())->first();
@endphp


@include('common.inner_header')
@include('common.sidebar')
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboards</a></li>
                                       
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">{{Dayzone()}}, {{get_user(user_id(),'username')}}!</h4>
                                               
                                            </div>
       
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">


                                @foreach ($roll->get() as $value)
                                    @php  $count_roll = DB::table('user_info')->where('status','!=',2)->where('position',$value->sort_name)->count();    @endphp
                                    @if($count_roll != 0)
                                    <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-primary">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-white-50 mb-0">Total {{$value->roll}}</p>
                                                            <h2 class="mt-4 ff-secondary fw-semibold text-white"> <span class="counter-value" data-target="{{$count_roll}}">0</span> </h2>
                                                            <p class="mb-0 text-white-50"><span class="badge badge-soft-light mb-0">
                                                                    <!-- <i class="ri-arrow-down-line align-middle"></i> 0.24 % -->
                                                                <!-- </span> vs. previous month</p> -->
                                                        </div>
                                                        <div>
                                                            <div class="avatar-sm flex-shrink-0">
                                                                 <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-info"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div> <!-- end card-->
                                        </div>
                                        @endif
                                    @endforeach
                                    </div>
                                    <!-- <br> -->
                                    <div class="row">

                                    @if(page_access(user_id(),'view_Staff_Documents') == 1)
                                     <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">Pending User Document <br><br><p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$user_document}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/staff_documents?status=0">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                        @endif

                                    @if(page_access(user_id(),'edit_Permission_Request') == 1 || page_access(user_id(),'view_Permission_Request') == 1 || page_access(user_id(),'view_Staff_View_Permission_Hrs') == 1)
                                    <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Pending Permission</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$pending}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/permission_request?status=Pending">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                        @endif

                                        @if(page_access(user_id(),'edit_Permission_Request') == 1 || page_access(user_id(),'view_Permission_Request') == 1 || page_access(user_id(),'view_Staff_View_Permission_Hrs') == 1)
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Approved Permission</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$approved}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/permission_request?status=Approved">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                        @endif

                                        @if(page_access(user_id(),'view_Staff_View_Leave') == 1 || page_access(user_id(),'view_Leave_Request') == 1 || page_access(user_id(),'edit_Leave_Request') == 1)
                                         <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body" style="padding-top: 34px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Leave Pending Request</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$pending_leave}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/leave_request?status=Pending">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>

                                        
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body" style="padding-top: 55px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Leave Approved</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$approved_leave}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/leave_request?status=Approved">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Attendance Time Extend Pending Request</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$pending_attendance_time_extended}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/attendance_time_extended_request?status=Pending">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- end card-->
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-animate bg-success">
                                               <div class="card-body" style="padding-top: 35px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                                                <i class="ri-file-2-line"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-3">This Month Attendance Time Extend Approved</p>
                                                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{$attendance_time_extended}}"></span></h4>
                                                            <p class="text-white-50 mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <a href="{{URL::to('')}}/attendance_time_extended_request?status=Approved">
                                                            <span class="badge badge-soft-light fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>View<span>
                                                                </span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-->
                                        </div>
                                        @endif
                                        </div>
     
                                <div class="row">
                                            
                                        <div class="col-xl-4 col-md-6" >
                                            <div class="card" id="today_working_hrs">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-white-50 mb-5">Today Working Hours</p>

                                                            <h3 class="mt-4 ff-secondary fw-semibold text-white"> {{date('d - m - Y')}} </h3> 
                                                            <h2 class="mt-4 ff-secondary fw-semibold text-white"> {{today_working_hrs(user_id())}} Hrs:Min</h2>   
                                                        </div>
                                                        <div >
                                                            <div class="avatar-sm flex-shrink-0">
                                                                 <span class="avatar-title clock_wrk rounded-circle fs-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-info"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div> <!-- end card-->
                                        </div>

                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <!-- <div id="calendar"></div> -->
                                                    <div id="calendar"></div>
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->



                        </div> <!-- end col -->

                        <div class="col-auto layout-rightside-col">
                            <div class="overlay"></div>
                            <div class="layout-rightside">
                               
                            </div> <!-- end .rightbar-->

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>

            

@include('common.inner_footer')

<script>
    $(document).ready(function(e){
        calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Monday");
        calendar.funcPer = function(ev){
            console.log(ev)
        };
        $.ajax({
            url: base_url+"/dashboard_calander",
            type: "POST",
             processData:false,
             contentType:false,
             cache:false,
             async:true,
            beforeSend: function() {
                $('#loader').show();
            },
            success: function (data) {                    
              var res = JSON.parse(data);

              

              const precent = res.precent.map(precents => {
                return Number(precents);
              });


              const low_working_day = res.low_working_day.map(low_working_day => {
                return Number(low_working_day);
              });

              const leavedays = res.leavedays.map(leavedays => {
                return Number(leavedays);
              });
             
              calendar.obsend = res.obsend;
              calendar.precent = precent;
              calendar.low_working_day = low_working_day;
              calendar.leavedays = leavedays;
              calendar.createCalendar();
        
            }
        });


    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">

    // var events = [{start: '2022/08/10', end: '2022/08/11', summary: "", mask: true,color: 'orange'}, {start: '2017/10/08', end: '2017/10/13', summary: "Example Event #3", mask: true}];

    // $('#calendar').calendar({'events': events});

    


</script>