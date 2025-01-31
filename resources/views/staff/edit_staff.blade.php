@include('common.inner_header')
@include('common.sidebar')
 <div class="vertical-overlay"></div>
<div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Student Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{URL::to('/viewstaff')}}">View All Staff</a></li>
                                        
                                        <li class="breadcrumb-item active">Edit Staff</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        {{-- <div class="col-lg-12">

                        <div class="edit">
                                    <a href="{{URL::to('/add_inventory')}}/{{encrypt_decrypt('encrypt',$user->userid)}}"><button class="btn btn-success add-btn">Add Inventory</button></a>
                        </div> --}}
                    <br>
                            <form action="<?php echo URL::to('/'); ?>/edit_insert_staff" id="edit-staff-form" class="edit-staff-form" method="post" autocomplete="off">
                                 {{ csrf_field() }} 
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Student Details</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">                                   
                                            <!-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Inventory </button>                                            -->
                                        </div>
                                    </div>

                                    
                                </div><!-- end card header -->
                                <input type="hidden" name="user_id"  id="user_id" value="{{$user_id}}" >
                                <div class="card-body">
                                    <div class="live-preview">
                                        
                                        <div class="row gy-4">
                                             <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Student ID:</label>
                                                    <input type="text" class="form-control" name="employee_id" id="employee_id" value="{{$user->employee_id}}" readonly>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Student Name *</label>
                                                    <input type="text" class="form-control" name="staffname" id="staffname" value="{{$user->username}}" placeholder="Please Enter The Staff User Name">
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Student Email *</label>
                                                    <input type="email" class="form-control" name="staffemail" id="staffemail" value="{{encrypt_decrypt('decrypt',$user->email)}}" placeholder="Please Enter The Staff Email ID">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Student Password </label>
                                                    <input type="text" class="form-control" name="password" id="password" value="{{encrypt_decrypt('decrypt',$user->password)}}"
                                                        placeholder="Staff Password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"> <i class="fas fa-eye-slash icone" id="eye"></i></button>
                                                        
                                                </div>
                                            </div>

                                           {{-- <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Personal Email *</label>
                                                    <input type="email" class="form-control" name="personalemail" id="personalemail" value="{{$user->personal_email}}" placeholder="Please Enter The Personal Email">
                                                </div>
                                            </div> --}}

                                           <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Phone Number - 1 *</label>
                                                    <input type="number" class="form-control" name="phone_no_one" id="phone_no_one"
                                                        placeholder="Staff Personal Phone Number" value="{{$user->phone_number}}">
                                                </div>
                                            </div>

                                            

                                    
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">College Name *</label>
                                                    <input type="text" class="form-control" name="College" id="College"
                                                        placeholder="Student College" value="{{$user->College}}">
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Student Department *</label>
                                                    <input type="text" class="form-control" name="College_dep" id="College_dep"
                                                        placeholder="Student Department" value="{{$user->College_dep}}">
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Student Year*</label>
                                                    <input type="text" class="form-control" name="Student_year" id="Student_year"
                                                        placeholder="Student Year" value="{{$user->Student_year}}">
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Date OF Birth *</label>
                                                    <input type="date" class="form-control" name="dob" id="dob"
                                                        placeholder="Staff Date Of Birth" value="{{$user->date_birth}}" data-provider="flatpickr">
                                                        <div id="errormsg" style="display: none;">Invalid date</div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-md-6">
                                                <label for="valueInput" class="form-label">Staff Role</label>
                                                <div class="input-group">
                                                    
                                                    <select class="form-select" name="roll" id="roll">
                                                        @foreach ($roll as $value)
                                                            <option value="{{$value->sort_name}}" <?php echo ($user->position == $value->sort_name) ? 'selected' : '' ?>>{{$value->roll}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label id="inputGroupSelect01-error" class="error" for="inputGroupSelect01"></label>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Student Course Department *</label>
                                                    <input type="text" class="form-control" name="department" id="department" value="{{$user->department}}" placeholder="Please Enter The Department">
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                 <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Permanent Address *</label>
                                                    <textarea class="form-control" id="address" name="address" rows="3"  placeholder="Enter Staff Permanent Address">{{$user->address}}</textarea>
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Date Of Joining * </label>
                                                    <input type="date" class="form-control" name="doj" id="doj" value="{{$user->date_join}}"
                                                        placeholder="Date Of Joining" data-provider="flatpickr">
                                                        <div id="errormsg" style="display: none;">Invalid date</div>
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Per Day Course Hours *</label>
                                                    <input type="text" class="form-control" name="working_hrs" id="working_hrs"
                                                        placeholder="Enter Staff Working Hours Format : 00:00" value="{{$user->working_hrs}}">
                                                </div>
                                            </div>


                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Course Fees *</label>
                                                    <input type="text" class="form-control" name="fees" id="fees"
                                                        placeholder="Enter the course Fees" value="{{$user->fees}}">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">First Paid Fees *</label>
                                                    <input type="text" class="form-control" name="First_paid" id="First_paid"
                                                        placeholder="Enter the First Paid" value="{{$user->First_paid}}">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Second Paid Fees *</label>
                                                    <input type="text" class="form-control" name="Second_paid" id="Second_paid"
                                                        placeholder="Enter the Second Paid" value="{{$user->Second_paid}}">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Third Paid Fees *</label>
                                                    <input type="text" class="form-control" name="third_paid" id="third_paid"
                                                        placeholder="Enter the Third Paid" value="{{$user->third_paid}}">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Fourth Paid Fees*</label>
                                                    <input type="text" class="form-control" name="Fourth_paid" id="Fourth_paid"
                                                        placeholder="Enter the Fourth Paid" value="{{$user->Fourth_paid}}">
                                                </div>
                                            </div>



                                        </div>
                                    
                                        <!--end row-->
                                    </div>
                                </div>


                       


                                <div class="card-header align-items-center d-flex">
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                       
                                        <div class="row gy-4">
                                    <div class="container">

                                    <div class="row"><div class="col"></div><div class="col">
                                      <div class="col-xxl-8 col-md-12">
                                    <center>
                                    <!-- <button style="display: none;" type="button" id="loader" class="btn btn-success w-100 btn-load">
                                            <span class="d-flex align-items-center">
                                                <span class="flex-grow-1 me-2">
                                                    Loading...
                                                </span>
                                                <span class="spinner-border flex-shrink-0" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </span>
                                            </span>
                                    </button> -->
                                    @if(page_access(user_id(),'edit_Staff_Details') == 1)
                                    <button type="submit" name="edit_staff_btn" id="edit_staff_btn" class="btn btn-success w-100">Submit</button>
                                    @endif
                                    </center>
                                 </div>
                                </div><div class="col"></div></div>


                      
                            </div>  
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </form>
                            </div>


                        </div>
                    </div>
                </div>



        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 650px;max-height: 500px;">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3"> <h4>Add Staff Inventory</h4>
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form action="<?php echo URL::to('/'); ?>/addinventory" id="add-inventory-form" class="add-inventory-form" method="post" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Choose Device * </label>
                                <select class="form-select device" id="inputGroupSelect01" name="device" id="device" >
                                        <option value="">Choose Accessories</option>
                                @foreach($access as $value)
                                        <option value="{{$value->id}}">{{$value->accessories_name}}</option>
                                @endforeach 
                                </select>
                            </div>
                            <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">


                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="inventory-btn" type="submit" name="inventory-btn" id="inventory-btn" class="btn btn-success w-100" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="modal fade" id="edit_staff_inventory_model" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 650px;max-height: 500px;">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3"> <h4>Edit Staff Inventory</h4>
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form action="<?php echo URL::to('/'); ?>/addinventory" id="add-inventory-form" class="add-inventory-form" method="post" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Choose Device * </label>
                                <select class="form-select" id="inputGroupSelect01" name="device" id="device" >
                                        <option value="">Choose Laptop</option>
                                @foreach($access as $value)
                                        <option value="{{$value->id}}">{{$value->accessories_name}}</option>
                                @endforeach 
                                </select>
                            </div>
                            <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                  

                          
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="inventory-btn" type="submit" name="inventory-btn" id="inventory-btn" class="btn btn-success w-100" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@include('common.inner_footer')           

<!-- <script>
      $('.dob').click(function() {
    var validateData = function () {
        var bday = $('#dob').val();
        var jday = $('#doj').val();        

        if (bday && jday && bday > jday) {return}             
        return true;
    };

    $("#dob, #doj").datepicker({      
       
     
        onClose: function () {
            validateData() ? $('#errormsg').hide() : $('#errormsg').show();
        }
    });
}); 

</script>-->

<script type="text/javascript">
        $('.edit_staff_inventory').click(function(){
        var id = $(this).attr("data-id");
        $.ajax({
            url: base_url+"/get_edit_staff_inventory/"+id,
            type: "POST",
            
             processData:false,
             contentType:false,
             cache:false,
             async:true,
            beforeSend: function() {
                $('#add_profile_btn').hide();
                $('#loader').show();
            },
            success: function (data) {                    
              var res = JSON.parse(data);
              $('#edit_staff_inventory_model').modal('show');
                // if(res.status == 1){
                   
                //    $('.edit_date').val(res.start_date.trim());
                //    $('#id').val(res.id);
                //    $('.edit_task').val(res.task);
                //    $('.edit_description').val(res.description);
                //    $('#edit_report_model').modal('show');

                // }else{
                  
                //   // $.notify(res.msg, {className: 'error',clickToHide: true,});

                // }
               
            
            }
        });
    })
</script>


      
               
           
             
              
 


<script type="text/javascript">
        $('.device').change(function(){
            var id = this.value;  
                           
            $.ajax({
            url: base_url+"/get_brand_names/"+id,
            type: "GET",
            // dataType: "html",
            //  processData:false,
            //  contentType:false,
            //  cache:false,
            //  async:true,
            beforeSend: function() {
                // $('#add_profile_btn').hide();
                // $('#loader').show();
            },
            success: function (data) {  
            $('#brand_append').html(data);
            //   var res = JSON.parse(data);
            //   $('#edit_staff_inventory_model').modal('show');
                // if(res.status == 1){
                   
                //    $('.edit_date').val(res.start_date.trim());
                //    $('#id').val(res.id);
                //    $('.edit_task').val(res.task);
                //    $('.edit_description').val(res.description);
                //    $('#edit_report_model').modal('show');

                // }else{
                  
                //   // $.notify(res.msg, {className: 'error',clickToHide: true,});

                // }
               
            
            }
        });
    })
</script>






<!-- $.ajax({
            url : "",
            type:'POST',
            dataType: 'json',
            success: function(response) {
                $("#brand").attr('disabled', false);
                $.each(response,function(key, value)
                {
                    $("#brand").append('<option value=' + key + '>' + value + '</option>');
                });
             }
        }); -->