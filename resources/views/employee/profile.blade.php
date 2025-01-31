@include('common.employee.inner_header')
@include('common.employee.sidebar')

 <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('/employees/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">

                                        <h4>Personal Details</h4>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Employee ID :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> <b>{{$user->employee_id}}</b>
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Employee Name :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->username}}
                                            </label>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Employee Email :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{encrypt_decrypt('decrypt',$user->email)}}
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Personal Email :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->personal_email}}
                                            </label>

                                        </div>

                                           <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Blood Group :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->blood_group}}
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Date OF Birth :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->date_birth}}
                                            </label>

                                                         
                                           
                                      
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Permanent Address :
                                            </label>
                                            <label class="col-lg-5 col-form-label" for="val-username"> {{$user->address}}
                                            </label>
                                        </div>

                                         <h4>Office Details</h4>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Employee Roll :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> <?php echo ucwords($user->position) ?>
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Designation :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> <?php echo ucwords($user->designation) ?>
                                            </label>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Department :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->department}}
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Date Of Joining :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->date_join}}
                                            </label>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username"> Official Mail ID :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"> {{$user->official_mail}}
                                            </label>

                                             <label class="col-lg-2 col-form-label" for="val-username"> Daily Complete Working Hours :
                                            </label>
                                            <label class="col-lg-3 col-form-label" for="val-username"><?php  echo ($user->working_hrs) ? $user->working_hrs : '08:00';  ?> Hrs
                                            </label>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                        <h3>Change Password</h3><br>
    <form class="form-horizontal" action="{{url('employees/ChangePassword')}}" method="POST" id="employeechange_pass" enctype="multipart/form-data">                 
        @csrf
     
        <div class="modal-body p-4 bg-light">
         
            <div class="my-2">
              <label for="fname">Current Password *</label>
              <input type="password" name="current_pass"  id="current_pass" class="form-control" placeholder="Enter Current Password">
            </div>
          
          <div class="my-2">
              <label for="lname">New Password *</label>
              <input type="password" name="new_pass" id="new_pass" class="form-control" placeholder="Enter New Password">
            </div>
          <div class="my-2">
            <label for="cpass">Confirm New Password *</label>
            <input type="password" name="confirm_pass" id="confirm_pass" class="form-control" placeholder="Enter Confirm New Password">
          </div>
         
        </div>
        <div class="modal-footer" style="margin-right: 538px;">
          <button type="submit" name="chnage_pass_btn" id="chnage_pass_btn" class="btn btn-success">Submit</button>
        </div>
      </form>
                    </div>
                </div>
            </div>
    </div></div>
                </div>



                
        </div>
        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

@include('common.employee.inner_footer')
